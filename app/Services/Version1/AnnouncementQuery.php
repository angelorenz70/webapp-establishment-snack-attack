<?php

namespace App\Services\Version1;

use Illuminate\Http\Request;

class AnnouncementQuery{
    protected $safeParms = [
        'header' => ['eq'],
        'sub_header' => ['eq'],
        'image' => ['eq'],
        'user_id' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'user_id' => 'user_id'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

    public function transform(Request $request){
        $eloQuery = [];

        foreach($this->safeParms as $parm => $operators){
            $query = $request->query($parm);

            if(!isset($query)){
                continue;
            }

            $column = $this->columnMap[$parm] ?? $parm;

            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}