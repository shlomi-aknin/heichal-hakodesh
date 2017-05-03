<?php
	class Article {
		const Table = 'articles';
        private $id;
		private $name;
		private $text;
		private $long_text;
        private $cat_id;
		private $date;
	
    public function __construct($id = null) {
        if($id) {
            global $db;
            $db->where('id',$id);
            $article = $db->get(Self::Table);
            $article = array_shift($article);
            if(isset($article['id'])) $this->setId($article['id']);
            if(isset($article['name'])) $this->setName($article['name']);
            if(isset($article['text'])) $this->setText($article['text']);
            if(isset($article['long_text'])) $this->setLongText($article['long_text']);
            if(isset($article['cat_id'])) $this->setCatId($article['cat_id']);
            if(isset($article['date'])) $this->setDate(strtotime($article['date']));
        }
    }
    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    private function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    private function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of text.
     *
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the value of text.
     *
     * @param mixed $text the text
     *
     * @return self
     */
    private function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets the value of long_text.
     *
     * @return mixed
     */
    public function getLongText()
    {
        return $this->long_text;
    }

    /**
     * Sets the value of long_text.
     *
     * @param mixed $long_text the long text
     *
     * @return self
     */
    private function setLongText($long_text)
    {
        $this->long_text = $long_text;

        return $this;
    }

    /**
     * Gets the value of cat_id.
     *
     * @return mixed
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * Sets the value of cat_id.
     *
     * @param mixed $cat_id the cat id
     *
     * @return self
     */
    private function setCatId($cat_id)
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    /**
     * Gets the value of date.
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the value of date.
     *
     * @param mixed $date the date
     *
     * @return self
     */
    private function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}
?>