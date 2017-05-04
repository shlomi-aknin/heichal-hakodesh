<?php
	class Image {
		const Table = 'images';
        private $id;
		private $name;
		private $article_id;
        private $video;
		private $date;
        private $is_main;
    
    public function __construct($id = null) {
        if($id) {
            global $db;
            $db->where('id',$id);
            $image_row = $db->getOne(Self::Table);
            if($db->count > 0) {
                if(isset($image_row['id']))
                    $this->setId($image_row['id']);
                if(isset($image_row['name']))
                    $this->setName($image_row['name']);
                if(isset($image_row['article_id']))
                    $this->setArticleId($image_row['article_id']);
                if(isset($image_row['video']))
                    $this->setVideo($image_row['video']);
                if(isset($image_row['date']))
                    $this->setDate($image_row['date']);
                if(isset($image_row['is_main']))
                    $this->setIsMain($image_row['is_main']);
            }
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
     * Gets the value of article_id.
     *
     * @return mixed
     */
    public function getArticleId()
    {
        return $this->article_id;
    }

    /**
     * Sets the value of article_id.
     *
     * @param mixed $article_id the article id
     *
     * @return self
     */
    private function setArticleId($article_id)
    {
        $this->article_id = $article_id;

        return $this;
    }

    /**
     * Gets the value of video.
     *
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Sets the value of video.
     *
     * @param mixed $video the video
     *
     * @return self
     */
    private function setVideo($video)
    {
        $this->video = $video;

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

    /**
     * Gets the value of is_main.
     *
     * @return mixed
     */
    public function isMain()
    {
        return $this->is_main;
    }

    /**
     * Sets the value of is_main.
     *
     * @param mixed $is_main the is main
     *
     * @return self
     */
    private function setIsMain($is_main)
    {
        $this->is_main = $is_main;

        return $this;
    }
}
?>