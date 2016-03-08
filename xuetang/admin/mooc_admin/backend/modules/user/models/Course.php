<?php

namespace backend\modules\user\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $cid
 * @property string $cname
 * @property integer $mid
 * @property integer $sid
 * @property string $intro
 * @property string $cimg
 * @property integer $ctag
 * @property string $people
 * @property integer $c_id
 * @property integer $addtime
 * @property string $video
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid', 'sid', 'ctag', 'c_id', 'addtime'], 'integer'],
            [['intro'], 'string'],
            [['cname'], 'string', 'max' => 60],
            [['cimg'], 'string', 'max' => 200],
            [['people'], 'string', 'max' => 255],
            [['video'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cid' => Yii::t('app', 'Cid'),
            'cname' => Yii::t('app', 'Cname'),
            'mid' => Yii::t('app', 'Mid'),
            'sid' => Yii::t('app', 'Sid'),
            'intro' => Yii::t('app', 'Intro'),
            'cimg' => Yii::t('app', '图片路径'),
            'ctag' => Yii::t('app', 'Ctag'),
            'people' => Yii::t('app', 'People'),
            'c_id' => Yii::t('app', 'C ID'),
            'addtime' => Yii::t('app', '视频添加时间'),
            'video' => Yii::t('app', '视频路径'),
        ];
    }
}
