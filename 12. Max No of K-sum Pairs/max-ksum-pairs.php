class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Integer
 */
function maxOperations($nums, $k) {
    $count=0;
    $frequency=[];
    for($i=0;$i<count($nums);$i++)
    {
        $complement=$k-$nums[$i];
        if(isset($frequency[$complement]) && $frequency[$complement] > 0){
            $count++;
            $frequency[$complement]--;
        }else{
            if(!isset($frequency[$nums[$i]])){
                $frequency[$nums[$i]]=0;
            }
            $frequency[$nums[$i]]++;
        }
    }
    return $count;

 
}
}