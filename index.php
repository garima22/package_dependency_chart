<?php
$func=@$_POST['func'];
if(!isset($func))
  goto exit_it;
 
$dependency_path = './create-react-app/node_modules/';
$package_json_file_path = './create-react-app/package.json';

$contents = json_decode(file_get_contents($package_json_file_path));
$dependencyArr_1 = array_keys((array)$contents->dependencies);
$dependencyArr_2 = getDependencyData($dependencyArr_1);
$dependencyArr_3 = array();
foreach($dependencyArr_2 as $depend => $dependArr){
    if (isset($dependArr['depend'])){
        $dependArr['depend'] = getDependencyData($dependArr['depend']);
    }
    else{
        $dependArr['count'] = 0;
    }
    $dependencyArr_3[$depend] = $dependArr;
}
$series_data = $drilldown = $temp = array();

foreach($dependencyArr_3 as $dependency_1 => $dependency_1_arr){
    $drilldown_1 = array(); 
    if(isset($dependency_1_arr['depend'])){
        foreach ($dependency_1_arr['depend'] as $dependency_2 => $dependency_2_arr) {
            
            $drilldown_2 = array(); 
            if(isset($dependency_2_arr['depend'])){
                foreach ($dependency_2_arr['depend'] as $dependency_3) {
                    $drilldown_2[]= "{name:'$dependency_3',y:1}";          
                } 
                $drill_val_2 = implode(',', $drilldown_2); 
                $temp[]= "{name:'$dependency_2', id:'$dependency_2',data:[$drill_val_2]}";      
                $drilldown_1[]= "{name:'$dependency_2',y:{$dependency_2_arr['count']}, drilldown:'$dependency_2'}";
            }
            else{
                $drilldown_1[]= "{name:'$dependency_2',y:{$dependency_2_arr['count']}}";    
            }
            
        } 
    }
    if (count($drilldown_1)){
        $drill_val_1 = implode(',', $drilldown_1);  
        $drilldown[]= "{name:'$dependency_1', id:'$dependency_1',data:[$drill_val_1]}";     
        $series_data[] = "{name:'$dependency_1',y:{$dependency_1_arr['count']},drilldown:'$dependency_1'}"; 
    }
    else{
        $series_data[] = "{name:'$dependency_1',y:{$dependency_1_arr['count']}}"; 
    }
}
$series_data = implode(',', $series_data);
$drilldown = array_merge($drilldown, $temp);
$drilldown = implode(',', $drilldown);
echo "{name:'react-app',data: [$series_data]}".'<%SEP%>'.$drilldown;
            
function getDependencyData($dependencies){
    global $dependency_path;
    $dependencyArr = array();
    
    foreach($dependencies as $dependency){
        $file_path = $dependency_path.$dependency.'/package.json';
        $contents = json_decode(file_get_contents($file_path));
        $depend = @array_keys((array)$contents->dependencies);
        $dependencyArr[$dependency]['count'] = count($depend);
        if (count($depend)){   
            $dependencyArr[$dependency]['depend'] = $depend;
        }
        
    }
    return $dependencyArr;
}
exit();
exit_it:
?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

  
<script src="./js/index.js"></script>
<script src="./js/ajax_script.js"></script>
<title>Package Dependency chart for react-app</title>
<body onload=getChartData();>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</body>
