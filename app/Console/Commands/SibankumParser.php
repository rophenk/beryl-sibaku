<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use League\Csv\Reader;
use League\Csv\Writer;
use Excel;
use DB;
use App\Models\Sibankum\ApiModel;
use App\Models\Sibankum\CaseModel;

class SibankumParser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sibankum:parser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Perintah untuk melakukan parsing dari API yang tersimpan di database.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * [curl_get_data description]
     * @param  [type] $url [description]
     * @return [type]      [description]
     */
    public function curl_get_data($url) 
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        
        return $data;
    }

    public function downloadAPIFile($url, $localfile)
    {
        $file = file_get_contents($url);
        $save = file_put_contents($localfile, $url);
    }

    

    /**
     * [curl_get_last_modified description]
     * @param  [type] $url [description]
     * @return [type]      [description]
     */
    protected function curl_get_last_modified($url)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        // Only header
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_HEADER, true);
        // Do not print anything to output
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // get last modified date
        curl_setopt($curl, CURLOPT_FILETIME, true);

        $result = curl_exec($curl);
        // Get info
        $info = curl_getinfo($curl);

        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($httpcode=="200") {

            $last_modified = date("Y-m-d H:i:s", $info['filetime']);

        } else {

            $last_modified = "Error";

        }

        curl_close($curl);

        return $last_modified;
    }

    /**
     * [importCSV description]
     * @param  [type] $file   [description]
     * @param  [type] $api_id [description]
     * @return [type]         [description]
     */
    protected function importCSV($file, $api_id, $instansi_id)
    {
        $reader = Reader::createFromPath($file);
        $reader->setDelimiter(';');
        $delimiter = $reader->getDelimiter();
        $reader->setEscape('\\');
        $escape = $reader->getEscape(); //returns "\"

        //$data = $reader->fetchAll();
        
        $data = $reader->fetchAssoc([
            'court_type_id', 
            'number', 
            'work_unit',
            'case_number',
            'principal',
            'object',
            'proposal',
            'address'
            ]);


        //var_dump($data);
        //$dataParsed = new DataModel;
        foreach ($data as $key) {
            # jika ada judulnya proses ke dalam database
            if(!empty($key['number'])) {

                // Cek Apakah data sudah ada di database
                $dbcheck = DB::table('case')
                            ->where('instansi_id', '=', $instansi_id)
                            ->where('number', '=', $key['number'])
                            ->first();

                // Jika data sudah ada di database, update data tersebut
                
                if (!empty($dbcheck->id)) {

                    DB::table('case')
                        ->where('instansi_id', '=', $instansi_id)
                        ->where('number', '=', $key['number'])
                        ->update([
                            'court_type_id' => $key['court_type_id'],
                            'number'        => $key['number'],
                            'work_unit'     => $key['work_unit'],
                            'case_number'   => $key['case_number'],
                            'principal'     => $key['principal'],
                            'object'        => $key['object'],
                            'proposal'      => $key['proposal'],
                            'address'       => $key['address'],
                            'updated_at'    => date("Y-m-d H:i:s")
                        ]);

                } else {
                    // Jika data belum ada di database, insert data tersebut
                    // Proses input ke dalam database
                
                    DB::table('case')->insert([
                        'court_type_id' => $key['court_type_id'],
                        'uuid'          => Uuid::uuid4(),
                        'api_id'        => $api_id,
                        'number'        => $key['number'],
                        'work_unit'     => $key['work_unit'],
                        'case_number'   => $key['case_number'],
                        'principal'     => $key['principal'],
                        'object'        => $key['object'],
                        'proposal'      => $key['proposal'],
                        'address'       => $key['address'],
                        'instansi_id'   => $instansi_id,
                        'availability'  => 'unavailable',
                        'created_at'    => date("Y-m-d H:i:s")
                    ]);
                }
                
                echo $key['address']."\n";
                echo "Data tersimpan di database"."\n";
            } else {

                echo "Nomor Urut Data Kosong"."\n";
            }
        }
    }
        

    public static function importXLS($file, $api_id)
    {

        $results = Excel::load($file);

        $data = $results->toArray();
        foreach ($data as $key) {
            # jika ada judulnya proses ke dalam database
            if(!empty($key['document_title'])) {

                // Proses input ke dalam database
                
                 DB::table('data')->insert([
                    'document_title'=> $key['document_title'],
                    'uuid'          => Uuid::uuid4(),
                    'api_id'        => $api_id,
                    'writer'        => $key['writer'],
                    'description'   => $key['description'],
                    'publisher'     => $key['publisher'],
                    'year_published'=> $key['year_published'],
                    'file_type'     => $key['file_type'],
                    'pages'         => $key['pages'],
                    'isbn'          => $key['isbn'],
                    'document_size' => $key['document_size'],
                    'cover_image'   => $key['cover_image'],
                    'address'       => $key['address'],
                    'availability'  => 'unavailable'
                ]);
                
                echo $key['document_title']."\n";
                echo "Data tersimpan di database"."\n";
            } else {

                echo "Document_title Kosong"."\n";
            }
        }

    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Perintah untuk melakukan parsing
        $this->info('Sibankum API Parser is Running');
        $this->info('mengambil data API dari database');
        $this->info('=======================');
        $this->info('');

        // Ambil data url address API dari database tabel api
        $apis = ApiModel::all();

        $output = date ("Y-m-d H:i:s")."\n";

        // loop row data api
        foreach ($apis as $api) {

            $url = $api['address'];
            $id = $api['id'];
            $instansi_id = $api->server->instansi_id;
            $output .= $url."\n";
            $db_last_modified = $api['last_modified'];
            $this->info('');
            $this->info('Memeriksa file API di tujuan');

            // Ambil data last modified dari remote file
            $last_modified = SibankumParser::curl_get_last_modified($url);
            
            // Tampilkan informasi last modified dari database dan dari remote file
            $output .= "Database Last Modified : ".$db_last_modified."\n"; 
            $this->info('');
            $output .= "Remote File Last Modified : ".$last_modified."\n"; 
            $this->info('');
           
            if($last_modified === "Error") {

                $output .= "Error : unable retrieve remote file information"."\n";

            } else {

                // Jika http code 200 (OK)
                // Compare antara last modified di database dengan last modified remote file
                if($db_last_modified === $last_modified) {

                    $output .= "Do Nothing"."\n";

                } else {

                    // Jika last modified berbeda, ambil data dari remote file lalu simpan di local
                    $contents = SibankumParser::curl_get_data($url);
                    Storage::disk('local')->append('sibankum/temp/api.csv', $contents);
                    // Parsing file csv lokal
                    $csvfile = storage_path().'\app\sibankum\temp\api.csv';
                    
                    // hapus dulu data yang didapat dari api lama dari database
                    // $deletedRows = DataModel::where('api_id', '=', $id)->delete();
                    // Populasi table data dengan isi dari manifest api
                    $csv = SibankumParser::importCSV($csvfile, $id, $instansi_id);
                    
                    $output .= $csv."\n";


                    // Parsing file remote xls
                    //$xlsfile = $url;
                    //$xlslokal = storage_path().'\app\sibankum\temp\tutorial.xls';

                    //SibankumParser::downloadAPIFile($url, $xlslokal);

                    // hapus dulu data yang didapat dari api lama dari database
                    //$deletedRows = DataModel::where('api_id', '=', $id)->delete();

                    // Populasi table data dengan isi dari manifest api
                    //$csv = SibankumParser::importCSV($xlslokal, $id);
                    //$xls = SibankumParser::importXLS($xlslokal, $id);
                    
                    //$output .= $xls."\n";

                    // Update Last Modified menjadi sesuai dengan remote file
                    $apidata = ApiModel::find($id);
                    $apidata->last_modified = $last_modified;
                    $apidata->save();
                    
                    // hapus api.csv temporary file
                    Storage::delete('sibankum/temp/api.csv');

                    $output .= "Do Something"."\n";
                }

            }
            
            $output .= "======================="."\n";

            

        }

        Storage::disk('local')->append('sibankum/logs/'.date('Y').'/'.date('m').'/'.date('d').'-parser.log', $output);

        return $output;

        
    }
}
