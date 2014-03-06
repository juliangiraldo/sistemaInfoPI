<?php

class AgendaController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionCalendarEvents()
    {
        $items[]=array(
            'title'=>'Meeting',
            'start'=>'2014-03-23 10:30:00',
            'color'=>'#CC0000',
            'allDay'=>false,
            'timeFormat'=> 'H(:mm)',
            'url'=>'http://anyurl.com'
        );
        $items[]=array(
            'title'=>'Meeting reminder',
            'start'=>'2014-03-10 05:40:00',
            'end'=>'2014-03-12 06:00:00',
            'allDay'=>false,
            // can pass unix timestamp too
            // 'start'=>time()

            'color'=>'blue',
        );

        echo CJSON::encode($items);
        Yii::app()->end();
    }
    
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}