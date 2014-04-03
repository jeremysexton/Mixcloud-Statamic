<?php
class Plugin_mixcloud extends Plugin {

    var $meta = array(
        'name'       => 'Mixcloud',
        'version'    => '1.1',
        'author'     => 'Jeremy Sexton',
        'author_url' => 'http://jeremysexton.net'
    );

    public function index()
    {
      $width = $this->fetchParam('width', null);
      $height = $this->fetchParam('height', null);
      $url = $this->fetchParam('url', null);
    
      if ($url) {
	      $output = '
	      <iframe width="'.$width.'" height="'.$height.'" src="//www.mixcloud.com/widget/iframe/?feed='.$url.'&embed_type=widget_standard" frameborder="0"></iframe>
	      ';
	      return $output;
      }
      
    }

}