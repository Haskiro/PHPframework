<?php
    namespace MyProject\Models\Users;
    use MyProject\Models\ActiveRecordEntity;

    
    class User extends ActiveRecordEntity{
        private $name;
        private $nickname;

        public function getName(){
            return $this->name;
        }
        public function getNickname(){
            return $this->nickname;
        }
        public static function getTableName(): string{
            return 'users';
        }
    }
?>