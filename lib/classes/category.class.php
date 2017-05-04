<?php
	class Category {
		const Table = 'categories';
        private $id;
		private $name;
		private $parent;
    	
        public function __construct($id = null) {
            if($id) {
                global $db;
                $db->where('id',$id);
                $category = $db->get(Self::Table);
                $category = array_shift($category);
                if(isset($category['id'])) $this->setId($category['id']);
                if(isset($category['name'])) $this->setName($category['name']);
                if(isset($category['parent'])) $this->setParent($category['parent']);
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
         * Gets the value of parent.
         *
         * @return mixed
         */
        public function getParent()
        {
            return $this->parent;
        }

        /**
         * Sets the value of parent.
         *
         * @param mixed $parent the parent
         *
         * @return self
         */
        private function setParent($parent)
        {
            $this->parent = $parent;

            return $this;
        }
        public function getArticles() {
            global $db;
            $articles = [];
            $db->where('cat_id',$this->getId());
            $article_rows = $db->get('articles');
            if ($db->count > 0)
                foreach ($article_rows as $article)
                    $articles[] = new Article($article['id']);
            unset($article_rows);
            return $articles;
        }
}
?>