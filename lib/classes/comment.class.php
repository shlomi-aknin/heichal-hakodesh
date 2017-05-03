<?php
	class Comment {
		private $id;
		private $article_id;
		private $date;
		private $user_id;
	
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
     * Gets the value of user_id.
     *
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Sets the value of user_id.
     *
     * @param mixed $user_id the user id
     *
     * @return self
     */
    private function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}
?>