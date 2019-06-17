<?php
class Author {
    private $firstname;
    private $lastname;
    /**
     * Author constructor.
     * @param $firstname
     * @param $lastname
     * Hàm khởi tạo construct
     */
    public function __construct($firstname,$lastname)
    {
        /**
         * Gán 2 tham số truyền vào cho thuộc tính trong class
         */
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    public function getFirstname(){
        return $this->firstname;
    }
    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }
}
class Question {
    private $author;
    /**
     *  Khởi tạo Thuộc tính author là 1 đối tượng của class khác
     */
    private $question;
    public function __construct($question,$firstname,$lastname)
    {
        $this->author = new Author($firstname,$lastname);
        $this->question = $question;
    }
    /**
     * @return Author
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
$question = new Question("How to creat DI PHP","super ", "admin");