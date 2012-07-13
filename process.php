<?php include("objects/classes/class_lib.php"); ?>
<?php
	$tao = $_GET["person"];
	$trabahador = $_GET["employee"];
	$batas = $_GET["boss"];
	
	$person = new person($tao);
	$employee = new employee($trabahador); // papasok sya sa parent class pag hindi "employee" yung value
	$boss = new boss($batas);

	echo 
                "<table>"
                        ."<tr>"
                                ."<td>"
                                        ."<b>Tao :  </b>"
                                ."</td>"
                                ."<td>"
                                        .$person->get_name()
                                ."</td>"
                        ."</tr>"
                        ."<tr>"
                                ."<td>"
                                        ."<b>Trabahador :  </b>"
                                ."</td>"
                                ."<td>"
                                        .$employee->get_name()
                                ."</td>"
                        ."</tr>"
                        ."<tr>"
                                ."<td>"
                                        ."<b>Boss :  </b>"
                                ."</td>"
                                ."<td>"
                                        .$boss->get_name()
                                ."</td>"
                        ."</tr>"
                ."</table>"
        ;
        
	//$person->set_name("Rodan Luzuriaga"); // ganito nag seset ng value kapag walang constructor
?>
