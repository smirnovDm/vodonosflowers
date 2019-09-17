<?php

namespace frontend\controllers;

class UkraineSchoolController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionList($state = null, $area = null, $city = null){
        $data['state_alias'] = $state;
        $data['area_alias'] = $area;
        $data['city_alias'] = $city;

        return $this->render('list', $data);

    }
    public function actionSchoolInfo($name_school = null){
        $data['name'] = $name_school;
        return $this->render('school-info', $data);
    }
    public function actionTeacherInfo($name_teacher){
        $data['name'] = $name_teacher;
        return $this->render('teacher-info', $data);
    }


}
