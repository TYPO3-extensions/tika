<?php

########################################################################
# Extension Manager/Repository config file for ext "tika".
#
# Auto generated 23-02-2012 17:47
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Apache Tika for TYPO3',
	'description' => 'Provides Tika services for TYPO3 to detect a document\'s language, extract meta data, and extract content from files.
Can either use a stand alone Tika executable or Tika integrated in a Solr server with an activated extracting request handler.',
	'category' => 'services',
	'author' => 'Ingo Renner',
	'author_email' => 'ingo@typo3.org',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '2.0.0-dev',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'solr' => '3.1.0-',
			'devlog' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:82:{s:9:"ChangeLog";s:4:"a71d";s:16:"ext_autoload.php";s:4:"f2c9";s:21:"ext_conf_template.txt";s:4:"7a19";s:12:"ext_icon.gif";s:4:"de8e";s:17:"ext_localconf.php";s:4:"e467";s:14:"ext_tables.php";s:4:"9b9d";s:50:"classes/class.tx_tika_languagedetectionservice.php";s:4:"07b2";s:51:"classes/class.tx_tika_metadataextractionservice.php";s:4:"b43c";s:37:"classes/class.tx_tika_statuscheck.php";s:4:"f095";s:47:"classes/class.tx_tika_textextractionservice.php";s:4:"cd6b";s:14:"doc/manual.sxw";s:4:"0ae1";s:42:"report/class.tx_tika_report_tikastatus.php";s:4:"41b4";s:64:"tests/classes/class.tx_tika_languagedetectionservicetestcase.php";s:4:"ba24";s:65:"tests/classes/class.tx_tika_metadataextractionservicetestcase.php";s:4:"4e8c";s:61:"tests/classes/class.tx_tika_textextractionservicetestcase.php";s:4:"4267";s:43:"tests/test-documents/AutoDetectParser.class";s:4:"40e6";s:33:"tests/test-documents/TIKA-216.tgz";s:4:"3a5d";s:38:"tests/test-documents/big-preamble.html";s:4:"2448";s:33:"tests/test-documents/complex.mbox";s:4:"2396";s:33:"tests/test-documents/headers.mbox";s:4:"9058";s:35:"tests/test-documents/multiline.mbox";s:4:"f078";s:32:"tests/test-documents/quoted.mbox";s:4:"4429";s:32:"tests/test-documents/simple.mbox";s:4:"b85b";s:39:"tests/test-documents/test-documents.tar";s:4:"bae9";s:40:"tests/test-documents/test-documents.tbz2";s:4:"a56a";s:39:"tests/test-documents/test-documents.tgz";s:4:"9bac";s:39:"tests/test-documents/test-documents.zip";s:4:"c94e";s:37:"tests/test-documents/test-outlook.msg";s:4:"fe3d";s:33:"tests/test-documents/testAIFF.aif";s:4:"16b8";s:30:"tests/test-documents/testAU.au";s:4:"4d3b";s:32:"tests/test-documents/testBMP.bmp";s:4:"bf64";s:34:"tests/test-documents/testEPUB.epub";s:4:"c71a";s:42:"tests/test-documents/testEXCEL-formats.xls";s:4:"dc25";s:43:"tests/test-documents/testEXCEL-formats.xlsx";s:4:"4433";s:34:"tests/test-documents/testEXCEL.xls";s:4:"4a98";s:35:"tests/test-documents/testEXCEL.xlsx";s:4:"2e3b";s:32:"tests/test-documents/testFLV.flv";s:4:"7f64";s:32:"tests/test-documents/testGIF.gif";s:4:"2430";s:34:"tests/test-documents/testHTML.html";s:4:"5000";s:39:"tests/test-documents/testHTML_utf8.html";s:4:"f096";s:33:"tests/test-documents/testJPEG.jpg";s:4:"a5d1";s:38:"tests/test-documents/testJPEG_EXIF.jpg";s:4:"e053";s:32:"tests/test-documents/testMID.mid";s:4:"01dd";s:32:"tests/test-documents/testMP3.mp3";s:4:"3adb";s:32:"tests/test-documents/testMSG.msg";s:4:"986b";s:40:"tests/test-documents/testODFwithOOo3.odt";s:4:"3606";s:40:"tests/test-documents/testOpenOffice2.odf";s:4:"c2bd";s:40:"tests/test-documents/testOpenOffice2.odt";s:4:"c31b";s:32:"tests/test-documents/testPBM.pbm";s:4:"b45f";s:32:"tests/test-documents/testPDF.pdf";s:4:"4ef0";s:32:"tests/test-documents/testPGM.pgm";s:4:"81f9";s:32:"tests/test-documents/testPNG.png";s:4:"a917";s:32:"tests/test-documents/testPPM.ppm";s:4:"5be6";s:32:"tests/test-documents/testPPT.ppt";s:4:"af1e";s:33:"tests/test-documents/testPPT.pptx";s:4:"036c";s:32:"tests/test-documents/testRDF.rdf";s:4:"8878";s:32:"tests/test-documents/testRTF.rtf";s:4:"f298";s:32:"tests/test-documents/testSVG.svg";s:4:"aec1";s:33:"tests/test-documents/testSVG.svgz";s:4:"3236";s:32:"tests/test-documents/testSXW.sxw";s:4:"3e92";s:33:"tests/test-documents/testTIFF.tif";s:4:"4fa1";s:32:"tests/test-documents/testTXT.txt";s:4:"f38c";s:35:"tests/test-documents/testTXT_de.txt";s:4:"ba4b";s:35:"tests/test-documents/testTXT_en.txt";s:4:"e4d9";s:32:"tests/test-documents/testWAV.wav";s:4:"5148";s:33:"tests/test-documents/testWORD.doc";s:4:"5c1c";s:34:"tests/test-documents/testWORD.docx";s:4:"4fc7";s:35:"tests/test-documents/testXHTML.html";s:4:"c593";s:32:"tests/test-documents/testXML.xml";s:4:"5798";s:28:"tests/test-languages/da.test";s:4:"0e78";s:28:"tests/test-languages/de.test";s:4:"59fc";s:28:"tests/test-languages/el.test";s:4:"036a";s:28:"tests/test-languages/en.test";s:4:"351d";s:28:"tests/test-languages/es.test";s:4:"c423";s:28:"tests/test-languages/et.test";s:4:"f96d";s:28:"tests/test-languages/fi.test";s:4:"356f";s:28:"tests/test-languages/fr.test";s:4:"13cd";s:28:"tests/test-languages/it.test";s:4:"fd40";s:28:"tests/test-languages/lt.test";s:4:"fa28";s:28:"tests/test-languages/nl.test";s:4:"8b14";s:28:"tests/test-languages/pt.test";s:4:"4040";s:28:"tests/test-languages/sv.test";s:4:"c974";}',
	'suggests' => array(
	),
);

?>