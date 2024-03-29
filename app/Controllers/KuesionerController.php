<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKuesioner;

class KuesionerController extends BaseController
{
    public function __construct() {
        $this->ModelKuesioner = new ModelKuesioner();
    }

    public function index()
    {
        return view('kuesioner');
    }

    public function post_kuesioner()
    {
        $data = array(
            'nimhsmsmh'            => $this->request->getPost('nim'),
            'kdptimsmh'            => $this->request->getPost('kode_pt'),
            'tahun_masuk'        => $this->request->getPost('tahun_masuk'),
            'tahun_lulus'        => $this->request->getPost('tahun_lulus'),
            'kdpstmsmh'            => $this->request->getPost('kode_prodi'),
            'nmmhsmsmh'            => $this->request->getPost('nama_lengkap'),
            'telpomsmh'            => $this->request->getPost('nomor_handphone'),
            'emailmsmh'     => $this->request->getPost('email'),
            'f21'            => $this->request->getPost('f21'),
            'f22'            => $this->request->getPost('f22'),
            'f23'            => $this->request->getPost('f23'),
            'f24'            => $this->request->getPost('f24'),
            'f25'            => $this->request->getPost('f25'),
            'f26'            => $this->request->getPost('f26'),
            'f27'            => $this->request->getPost('f27'),
            'f301'            => $this->request->getPost('f301'),
            'f302'            => $this->request->getPost('f302'),
            'f303'            => $this->request->getPost('f303'),
            'f401'            => $this->request->getPost('f401'),
            'f402'            => $this->request->getPost('f402'),
            'f403'            => $this->request->getPost('f403'),
            'f404'            => $this->request->getPost('f404'),
            'f405'            => $this->request->getPost('f405'),
            'f406'            => $this->request->getPost('f406'),
            'f407'            => $this->request->getPost('f407'),
            'f408'            => $this->request->getPost('f408'),
            'f409'            => $this->request->getPost('f409'),
            'f410'            => $this->request->getPost('f410'),
            'f411'            => $this->request->getPost('f411'),
            'f412'            => $this->request->getPost('f412'),
            'f413'            => $this->request->getPost('f413'),
            'f414'            => $this->request->getPost('f414'),
            'f415'            => $this->request->getPost('f415'),
            'f416'            => $this->request->getPost('f416'),
            'f501'            => $this->request->getPost('f501'),
            'f502'            => $this->request->getPost('f502'),
            'f503'            => $this->request->getPost('f503'),
            'f6'            => $this->request->getPost('f6'),
            'f7'            => $this->request->getPost('f7'),
            'f7a'            => $this->request->getPost('f7a'),
            'f8'            => $this->request->getPost('f8'),
            'f901'            => $this->request->getPost('f901'),
            'f902'            => $this->request->getPost('f902'),
            'f903'            => $this->request->getPost('f903'),
            'f904'            => $this->request->getPost('f904'),
            'f905'            => $this->request->getPost('f905'),
            'f906'            => $this->request->getPost('f906'),
            'f1001'            => $this->request->getPost('f1001'),
            'f1002'            => $this->request->getPost('f1002'),
            'f1101'            => $this->request->getPost('f1101'),
            'f1102'            => $this->request->getPost('f1102'),
            'f1201'            => $this->request->getPost('f1201'),
            'f1202'            => $this->request->getPost('f1202'),
            'f1301'            => $this->request->getPost('f1301'),
            'f1302'            => $this->request->getPost('f1302'),
            'f1303'            => $this->request->getPost('f1303'),
            'f14'            => $this->request->getPost('f14'),
            'f15'            => $this->request->getPost('f15'),
            'f1601'            => $this->request->getPost('f1601'),
            'f1602'            => $this->request->getPost('f1602'),
            'f1603'            => $this->request->getPost('f1603'),
            'f1604'            => $this->request->getPost('f1604'),
            'f1605'            => $this->request->getPost('f1605'),
            'f1606'            => $this->request->getPost('f1606'),
            'f1607'            => $this->request->getPost('f1607'),
            'f1608'            => $this->request->getPost('f1608'),
            'f1609'            => $this->request->getPost('f1609'),
            'f1610'            => $this->request->getPost('f1610'),
            'f1611'            => $this->request->getPost('f1611'),
            'f1612'            => $this->request->getPost('f1612'),
            'f1613'            => $this->request->getPost('f1613'),
            'f1614'            => $this->request->getPost('f1614'),
            'f1701'            => $this->request->getPost('f1701'),
            'f1702b'            => $this->request->getPost('f1702b'),
            'f1703'            => $this->request->getPost('f1703'),
            'f1704b'            => $this->request->getPost('f1704b'),
            'f1705'            => $this->request->getPost('f1705'),
            'f1706b'            => $this->request->getPost('f1706b'),
            'f1705a'            => $this->request->getPost('f1705a'),
            'f1706ba'            => $this->request->getPost('f1706ba'),
            'f1707'            => $this->request->getPost('f1707'),
            'f1708b'            => $this->request->getPost('f1708b'),
            'f1709'            => $this->request->getPost('f1709'),
            'f1710b'            => $this->request->getPost('f1710b'),
            'f1711'            => $this->request->getPost('f1711'),
            'f1712b'            => $this->request->getPost('f1712b'),
            'f1713'            => $this->request->getPost('f1713'),
            'f1714b'            => $this->request->getPost('f1714b'),
            'f1715'            => $this->request->getPost('f1715'),
            'f1716b'            => $this->request->getPost('f1716b'),
            'f1717'            => $this->request->getPost('f1717'),
            'f1718b'            => $this->request->getPost('f1718b'),
            'f1719'            => $this->request->getPost('f1719'),
            'f1720b'            => $this->request->getPost('f1720b'),
            'f1721'            => $this->request->getPost('f1721'),
            'f1722b'            => $this->request->getPost('f1722b'),
            'f1723'            => $this->request->getPost('f1723'),
            'f1724b'            => $this->request->getPost('f1724b'),
            'f1725'            => $this->request->getPost('f1725'),
            'f1726b'            => $this->request->getPost('f1726b'),
            'f1727'            => $this->request->getPost('f1727'),
            'f1728b'            => $this->request->getPost('f1728b'),
            'f1729'            => $this->request->getPost('f1729'),
            'f1730b'            => $this->request->getPost('f1730b'),
            'f1731'            => $this->request->getPost('f1731'),
            'f1732b'            => $this->request->getPost('f1732b'),
            'f1733'            => $this->request->getPost('f1733'),
            'f1734b'            => $this->request->getPost('f1734b'),
            'f1735'            => $this->request->getPost('f1735'),
            'f1736b'            => $this->request->getPost('f1736b'),
            'f1737'            => $this->request->getPost('f1737'),
            'f1738b'            => $this->request->getPost('f1738b'),
            'f1737a'            => $this->request->getPost('f1737a'),
            'f1738ba'            => $this->request->getPost('f1738ba'),
            'f1739'            => $this->request->getPost('f1739'),
            'f1740b'            => $this->request->getPost('f1740b'),
            'f1741'            => $this->request->getPost('f1741'),
            'f1742b'            => $this->request->getPost('f1742b'),
            'f1743'            => $this->request->getPost('f1743'),
            'f1744b'            => $this->request->getPost('f1744b'),
            'f1745'            => $this->request->getPost('f1745'),
            'f1746b'            => $this->request->getPost('f1746b'),
            'f1747'             => $this->request->getPost('f1747'),
            'f1748b'            => $this->request->getPost('f1748b'),
            'f1749'             => $this->request->getPost('f1749'),
            'f1750b'            => $this->request->getPost('f1750b'),
            'f1751'             => $this->request->getPost('f1751'),
            'f1752b'            => $this->request->getPost('f1752b'),
            'f1753'             => $this->request->getPost('f1753'),
            'f1754b'            => $this->request->getPost('f1754b'),
            'validasi'          => 2,
            'status'            => 1,
            'status_active'     => 1,
            'status_lulus'      => 1,
            'waktu_pengisian' => date('Y-m-d H:i:s')
        );
        if ($this->ModelKuesioner->update_biodata($data)) {
            session()->setFlashdata('status', 'berhasil');
            return redirect()->to(base_url('kuesioner'));
        }else{
            session()->setFlashdata('status', 'gagal');
            return redirect()->to(base_url('kuesioner'));
        }
    }
}
    