<?php
namespace Rtgroup\DataProcessor;

class DataProcessor
{
    private array $dataSet;

    public function __construct(array $dataSet)
    {
        $this->dataSet=$dataSet;

    }

    /**
     * Method pour groupper les données par key.
     * @param $key
     */
    public function groupBy($query)
    {
        $query=$this->format($query);
        $keyData=[];

        for($i=0; $i<count($this->dataSet); $i++)
        {
            for($k=0; $k<count($this->dataSet[$i]); $k++)
            {
                $keys=array_keys($this->dataSet[$i][$k]);

                foreach($this->dataSet[$i][$k] as $key=>$value)
                {
                    $value=$this->format($value);
                    if($this->equals($query,$value))
                    {
                        echo $key."#".$value."\n";
                    }


                }
                echo "===============\n";
            }
            exit();
        }

    }

    /**
     * Method pour comparer 2 strings.
     * @param $str1
     * @param $str2
     * @param bool $ignoreCase
     * @return bool
     */
    private function equals($str1,$str2,$ignoreCase=true)
    {
        if($ignoreCase)
        {
            if(strcasecmp($str1,$str2)==0)
            {
                return true;
            }

            return false;
        }
        else
        {
            if(strcmp($str1,$str2)==0)
            {
                return true;
            }

            return false;
        }
    }

    private function format($key)
    {
        $k=str_replace(" ","_",$key);

        return $k;
    }
}