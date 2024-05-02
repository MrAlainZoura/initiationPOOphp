<?php
namespace Class;

use Class\interface\downloadPDF;

class PDFdownloadBasic implements downloadPDF
{

	public function downloaderPDF(?int $size=null):string
	{
		return 'PDF telecharge (Basic)';
	}
}
