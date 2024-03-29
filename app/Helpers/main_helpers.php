<?php

function get_data_kode_prodi_with_name($name)
{
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('program_studi')
            ->where('NAMA_PRODI',$name)
            ->get();
    $results = $query->getUnbufferedRow();
    return $results;
}

function get_data_provinsi_with_id($id)
{
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('provinces')
            ->where('id',$id)
            ->get();
    $results = $query->getUnbufferedRow();
    return $results;
}

function get_data_lulusan($nim){
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('lulusan_satu')
            ->where('nimhsmsmh',$nim)
            ->get();
    $results = $query->getUnbufferedRow();
    return $results;
}
function get_data_alumni_by_nim($nim){
    $db = \Config\Database::connect('acc_tracer');
    $query = $db->table('alumni')
            ->where('nim', $nim)
            ->get();
    $results = $query->getUnbufferedRow();
    return $results;
}

function get_data_registrasi($nim)
{
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('ref_registrasi')
            ->where('nim', $nim)
            ->get();
    $results = $query->getUnbufferedRow();
    return $results;
}

function check_status_activation($activation_code)
{
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('ref_registrasi')
            ->where('activation', $activation_code)
            ->get();
    $results = $query->getUnbufferedRow();
    return $results;
}

function check_permission_user()
{
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('fr_registrasi')
            ->where('nim', Session()->get('C_NPM'))
            ->get();
    $results = $query->getUnbufferedRow();
    return $results;
}

function get_data_biodata($nim)
{
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('ref_biodata')
            ->where('nim',$nim)
            ->get();
    $results = $query->getUnbufferedRow();
    return $results;
}

function get_data_country()
{
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('country')->get();
    $results = $query->getResult();
    return $results;
}

function get_data_provinces()
{
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('provinces')->get();
    $results = $query->getResult();
    return $results;
}

function check_biodata($nim){
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('ref_biodata')
            ->where('nim',$nim)
            ->get();
    $results = $query->getUnbufferedRow();
    if ($results->nama_lengkap == '' || $results->jenis_kelamin == '' || $results->tempat_lahir == '' || $results->tanggal_lahir == '' || $results->nim == '' || $results->program_studi == '' || $results->tahun_masuk == '' || $results->tahun_keluar == '' || $results->alamat == '' || $results->negara == '' || $results->provinsi == '' || $results->kabupaten == '' || $results->jenis_pekerjaan == '' || $results->nama_perusahaan == '' || $results->tanggal_masuk_kerja == '' || $results->email == '' || $results->nomor_handphone == '') {
        return 0;
    }else{
        return 1;
    }
}


function get_email_with_activation_code($activation_code)
{
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('ref_registrasi')
            ->where('activation',$activation_code)
            ->get();
    $results = $query->getUnbufferedRow();
    return $results;
}

function get_data_program_studi(){
    $db = \Config\Database::connect('accext_tracer');
    $query = $db->table('program_studi')->get();
    $results = $query->getResult();
    return $results;
}

?>