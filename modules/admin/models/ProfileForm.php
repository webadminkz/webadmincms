<?php
namespace app\modules\admin\models;

use yii\base\Model;

/**
 * @property mixed username
 */
class ProfileForm extends Model
{
    public $email;
    public $username;

    /**
     * @var User
     */
    private $_user;

    public function __construct(User $user, $config = [])
    {
        $this->_user = $user;
        $this->email = $user->email;
        $this->username = $user->username;
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            ['email', 'required'],
            ['email', 'email'],
            [
                'email', 'unique', 'targetClass' => User::className(), 'message' => 'This email address has already been taken.',
                'filter' => ['<>', 'id', $this->_user->id],
            ],
            ['email', 'string', 'max' => 255],

            ['username', 'required'],
            [
                'username', 'unique', 'targetClass' => User::className(), 'message' => 'This username has already been taken.',
                'filter' => ['<>', 'id', $this->_user->id],
            ],
            ['username', 'string', 'min' => 2, 'max' => 255],
        ];
    }

    public function update()
    {
        if ($this->validate()) {
            $user = $this->_user;
            $user->email = $this->email;
            $user->username = $this->username;
            return $user->save();
        } else {
            return false;
        }
    }
}