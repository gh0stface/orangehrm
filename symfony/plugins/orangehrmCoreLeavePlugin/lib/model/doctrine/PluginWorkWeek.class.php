<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class PluginWorkWeek extends BaseWorkWeek {
    const WORKWEEK_LENGTH_FULL_DAY = 0;
    const WORKWEEK_LENGTH_HALF_DAY = 4;
    const WORKWEEK_LENGTH_WEEKEND = 8;
    const DEFAULT_WORK_WEEK_ID = 1;

    private static $daysList = array(1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday');
    private static $daysLengthList = array(0 => 'Full Day', 4 => 'Half Day', 8 => 'Non-working Day');
    private static $yesNoList = array(0 => 'No', 1 => 'Yes');
    private static $dayColumns = array(1 => 'mon', 2 => 'tue', 3 => 'wed', 4 => 'thu', 5 => 'fri', 6 => 'sat', 7 => 'sun');

    /**
     * Return Possible Days List
     *
     * @return array $daysList
     * 
     */
    public static function getDaysList() {
        return self::$daysList;
    }

    /**
     * Return Possible weights for all days
     *
     * @return array $daysLengthList
     * 
     */
    public static function getDaysLengthList() {
        return self::$daysLengthList;
    }

    /**
     * return name of the week by given day
     * @param integer $id
     * @return string
     * 
     */
    public static function getDayById($id) {
        if (array_key_exists($id, self::$daysList)) {
            return self::$daysList[$id];
        } else {
            throw new LeaveServiceException('Invalid Day');
        }
    }

    /**
     * Return Yes No List
     * @return array yesNoList
     * 
     */
    public static function getYesNoList() {
        return self::$yesNoList;
    }
    
    /**
     * Returns the length of non-working hours of the passed day
     * @param int $day ISO-8601 numeric representation of the day of the week (1 for Monday through 7 for Sunday)
     * @return int
     */
    public function getLength($day) {
        if (array_key_exists($day, self::$dayColumns)) {
            $dayColumnIndex = self::$dayColumns[$day];
            return $this->_data[$dayColumnIndex];;
        } else {
            throw new LeaveServiceException('Invalid Day');
        }
    }

}