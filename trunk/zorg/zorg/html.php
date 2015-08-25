<?php
class Zorg_Html
{
    const EOL = "\n";
    
    public static function tag($tag, $htmlOptions=array(), $content=false){
        $return = '<'.$tag.self::renderHtmlOptions($htmlOptions);
        if ($content === false){
            $return .= '/>'.self::EOL;
        } else {
            $return .= '>'.$content.'</'.$tag.'>'.self::EOL;
        }
        return $return;
    }

    public static function renderHtmlOptions($htmlOptions){
        $return = '';
        foreach ($htmlOptions as $key=>$value){
            $return .= ' '.$key.'="'.$value.'"';
        }
        return $return;
    }
}
?>
