<?php

class contact extends Model {
    public function __construct(){
        parent::__construct();
        $this->setTableName('contact');
        $this->setColumn([
            'id_contact',
            'nama_contact',
            'nomor_hp',
          
           
        ]);
    }

    public function getAll(){
        return $this->get()->fetchAll();   
    }

    /**
     * Create data contact
     */
    public function store($data){
        $table = [
            'nama_contact' => $data['nama_contact'],
            'nomor_hp' => $data['nomor_hp'],
            
        ];

        return $this->insertData($table);
    }

    /**
     * Show by id data contact
     */
    public function getbyid($id){
        return $this->get(['id_contact' => $id])->fetch();
    }

    /**
     * Update data contact
     */
    public function updateDatacontact($data){
        $table = [
            'nama_contact' => $data['nama_contact'],
            'nomor_hp' => $data['nomor_hp'],
            
            
        ];
        $key = [
            'id_contact' => $data['id_contact'],
        ];

        return $this->updateData($table, $key);
    }

    /**
     * Delete data contact
     */
    public function destroy($id){
        return $this->deleteData(['id_contact' => $id]);
    }
}