<?php
/* @var $this AgendaController */

$this->breadcrumbs=array(
	'Agenda',
);
?>

<?php
$this->widget('ext.EFullCalendar.EFullCalendar', array(
    // polish version available, uncomment to use it
    // 'lang'=>'pl',
    // you can create your own translation by copying locale/pl.php
    // and customizing it
 
    // remove to use without theme
    // this is relative path to:
    // themes/<path>
    'themeCssFile'=>'cupertino/theme.css',
 
    // raw html tags
    'htmlOptions'=>array(
        // you can scale it down as well, try 80%
        'style'=>'width:100%'
    ),
    // FullCalendar's options.
    // Documentation available at
    // http://arshaw.com/fullcalendar/docs/
    'options'=>array(
        'header'=>array(
            'left'=>'prev,next',
            'center'=>'title',
            'right'=>'today'
        ),
        'selectable'=>true,
        'lazyFetching'=>true,
        'events'=>$this->createUrl('calendarEvents'), // action URL for dynamic events, or
//        'events'=>array(
//            'agenda'=>'h:mm{ - h:mm}', // 5:00 - 6:30
//            // for all other views
//        ) // pass array of events directly
 
        // event handling
        // mouseover for example
//        'events'=>'js:function(start, end, callback) {
//            $.ajax({
//                url: "'.$this->createUrl('CalendarEvents',array('id'=>$model->id)).'",
//                dataType: "json",
//                data: {
//                    start_date: Math.round(start.getTime() / 1000),
//                    end_date: Math.round(end.getTime() / 1000),
//                },
//                success: function(shifts)
//                {
//                    callback(shifts);
//                }
//            });
//        }',
    )
));