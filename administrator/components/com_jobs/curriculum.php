<?php


		Header("Content-Type: image/png"); 
		//include("../components/com_jobs/FusionCharts/reportes/Includes/FusionCharts.php");
		include ("components/com_jobs/jpgraph/jpgraph.php");
		include ("components/com_jobs/jpgraph/jpgraph_line.php");
// Some data
							$ydata = array(11.5,3,8,12,5,1,9,13,5,7);

							// Create the graph. These two calls are always required
							$graph = new Graph(450,250,"auto");
							$graph->SetScale("textlin");
							$graph->img->SetAntiAliasing();
							$graph->xgrid->Show();

							// Create the linear plot
							$barplot=new BarPlot($ydata);
							$barplot->SetColor("black");
							$barplot->SetWeight(2);
							$$barplot->SetLegend("Horas");
							
							$barplot->value ->Show();

							// Setup margin and titles
							$graph->img->SetMargin(40,20,20,40);
							$graph->title->Set("Ejemplo: Horas de Trabajo");
							$graph->xaxis->title->Set("Dias");
							$graph->yaxis->title->Set("Horas de Trabajo");
							$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#F9BB64@0.5');
							//$graph->SetShadow();

							// Add the plot to the graph
							$graph->Add($lineplot);

							// Display the graph
							$graph->Stroke(_IMG_AUTO);
							
							// Stroke image to a file and browser
 
							// Default is PNG so use ".png" as suffix
							$fileName = "components/com_jobs/tmp/imagefile.png";
							$graph->img->Stream($fileName);
 
							// Send it back to browser
							$graph->img->Headers("image/png");
							$graph->img->Stream();

?>