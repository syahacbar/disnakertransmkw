<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }

    public function Header()
    {
        $logoX = 7; // 186mm. The logo will be displayed on the right side close to the border of the page
        $logoFileName = base_url('assets/frontend/assets/img/logodisnakertransmkw.png');
        $logoWidth = 40; // 15mm
        // Set font
        $this->SetFont('helvetica', 'I', 7);
        $this->Image($logoFileName, $logoX, 5, $logoWidth);
        // $headertext = '
        // <table border="0" width="100%">
        // <tr><td align="left"></td>
        //     <td align="center"></td>
        //     <td align="right">Copyright &copy; 2022 DisnakertransMkw. All rights reserved.</td>
        // </tr>
        // <tr><td align="left"></td>
        //     <td align="center">Page ' . $this->getAliasNumPage() . ' of ' . $this->getAliasNbPages() . '</td>
        //     <td align="right">Print date: ' . date("d-m-Y H:i:s") . '</td>
        // </tr>
        // </table>';
        // $this->writeHTML($headertext);
    }

    // Page footer
    public function Footer()
    {
        $logoX = 7; // 186mm. The logo will be displayed on the right side close to the border of the page
        $logoFileName = base_url('assets/frontend/assets/img/clients/logopemkabmanokwari.png');
        $logoWidth = 40; // 15mm
        // Set font
        $this->SetFont('helvetica', 'I', 7);
        // $this->Image($logoFileName, $logoX, $this->GetY(), $logoWidth);
        $footertext = '
        <table border="0" width="100%">
        <tr><td align="left"></td>
            <td align="center"></td>
            <td align="right">Copyright &copy; 2022 DisnakertransMkw. All rights reserved.</td>
        </tr>
        <tr><td align="left"></td>
            <td align="center">Page ' . $this->getAliasNumPage() . ' of ' . $this->getAliasNbPages() . '</td>
            <td align="right">Print date: ' . date("d-m-Y H:i:s") . '</td>
        </tr>
        </table>';
        $this->writeHTML($footertext);
    }
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */