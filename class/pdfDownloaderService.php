<?php
namespace Class;
use Class\interface\downloadPDF;

class PdfDownloaderService
{
	//etant donne que basic et prenium download implemente la meme interface, on va donner comme parametre le nom de l'iterface a la methode Pdfdownload
	public function Pdfdownload(downloadPDF $basicPdf)
	//public function Pdfdownload(PDFdownloadBasic $basicPdf)
	{
		//downloaderPDF est la methode qui se trouve dans la classe PDFdownloadBasic et prenium issue de la meme interface interface downloadPDF
		return $basicPdf->downloaderPDF();
	}
}