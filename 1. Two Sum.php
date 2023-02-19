<?php

class Solution {
    
    function twoSum($nums, $target) {  
	
        $lenght = count($nums);               
        for($x=0;$x<$lenght;$x++){
            for($i=$x+1;$i<$lenght;$i++){
                if($nums[$x]+$nums[$i]==$target ){		
                return array($x, $i);;
                }                
            }	
        }
        
    }
}
