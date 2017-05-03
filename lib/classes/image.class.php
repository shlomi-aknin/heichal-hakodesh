<?php
	class Image {
		private $id;
		private $name;
		private $article_id;
		private $video;
	
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
}
?>