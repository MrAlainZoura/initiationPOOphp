<?php
namespace Class;

use Class\interface\downloadPDF;

class PDFdownloadPRENIUM implements downloadPDF
{

	public function downloaderPDF(?int $size=null):string
	{
		return 'PDF telecharge (PRENIUM)';
	}
}
