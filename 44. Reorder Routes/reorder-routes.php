<?php
class Solution
{

    /**
     * @param Integer $n
     * @param Integer[][] $connections
     * @return Integer
     */
    function minReorder($n, $connections)
    {
        $graph = array_fill(0, $n - 1, []);
        $edges = [];
        foreach ($connections as [$from, $to]) {
            $graph[$from][] = $to;
            $graph[$to][] = $from;
            $edges["$from,$to"] = true;
        }

        $queue = [0];
        $redirections = 0;
        $visited = array_fill(0, $n - 1, false);
        $visited[0] = true;

        while (!empty($queue)) {
            $node = array_shift($queue);

            foreach ($graph[$node] as $neighbor) {
                if (!$visited[$neighbor]) {
                    if (isset($edges["$node,$neighbor"])) {
                        $redirections++;
                    }
                    $visited[$neighbor] = true;
                    $queue[] = $neighbor;
                }
            }
        }
        return $redirections;
    }
}
