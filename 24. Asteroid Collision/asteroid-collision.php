class Solution {

/**
 * @param Integer[] $asteroids
 * @return Integer[]
 */
function asteroidCollision($asteroids) {
    $stack=[];
    foreach($asteroids as $asteroid){
        $skip=0;
        while(!empty($stack) && $asteroid<0 && end($stack)>0){
            $top=end($stack);
            if(abs($top)<abs($asteroid)){
                array_pop($stack);
                continue;
            }elseif(abs($top)==abs($asteroid)){
                array_pop($stack);
                $skip=1;
            }
            break;
        }
        if((empty($stack) || $asteroid>0 ||end($stack)<0) && $skip==0){
            $stack[]=$asteroid;
        }
    }
    return $stack;
}
}
