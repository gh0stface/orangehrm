<?php

/**
 * AttendanceRecordTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AttendanceRecordTable extends PluginAttendanceRecordTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object AttendanceRecordTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AttendanceRecord');
    }
}