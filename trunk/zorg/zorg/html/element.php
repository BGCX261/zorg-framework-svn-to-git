<?php
class Zorg_Html_Element
{  
    protected $_tag;
    protected $_content;
    protected $_isClosingBracket = false;
    
    public function getTag() {
        return $this->_tag;
    }
    
    public function setTag($_tag) {
        $this->_tag = $_tag;
    }

    public function getContent() {
        return $this->_content;
    }

    public function setContent($_content) {
        $this->_content = $_content;
    }
    
    public function render(){
        $properties = get_object_vars($this);
        $xhtml = '<'.$this->_tag;
        foreach ($properties as $key=>$value) {
            if ($key !== '_content' && $key !== '_tag' && $key !== '_isClosingBracket' && $value !== NULL){
                $xhtml .= ' '.str_ireplace('_', '', $key).'="'.$this->$key.'"';
            }
        }
        if ($this->_isClosingBracket){
            $xhtml.= '/>'.Zorg_Html::EOL;
        } else {
            $xhtml.= '>';
            $xhtml.=$this->_content;
            $xhtml.='</'.$this->_tag.'>'.Zorg_Html::EOL;
        }
        return $xhtml;
    }
}
?>
