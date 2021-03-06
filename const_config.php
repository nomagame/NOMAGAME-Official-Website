<?php
/**
 * Created by GreenStudio GCS Dev Team.
 * File: const_config.php
 * User: Timothy Zhang
 * Date: 14-1-25
 * Time: 下午12:25
 */

/**
 * 强制修正URL路径(一般不需要开启)
 * 适用于反代一个二级目录并且不能替换部分文字的情况。(我说的就是捉急的iis~~~~)
 * /
//define('__APP__', '');

/**
 * 缓存目录设置
 * 此目录必须可写，建议移动到非WEB目录
 */
define ("RUNTIME_PATH", WEB_ROOT . 'Data/Temp/');

/**
 * 定义项目日志文件路径
 * 此目录必须可写，建议移动到非WEB目录
 */
define("LOG_PATH", WEB_ROOT . "Data/Log/");

/**
 * 定义Cache目录
 * 此目录必须可写，建议移动到非WEB目录
 */
define('WEB_CACHE_PATH', WEB_ROOT . "Data/Cache/");

/**
 * 系统备份数据库文件存放目录
 * 此目录必须可写，建议移动到非WEB目录
 */
define("DB_Backup_PATH", WEB_ROOT . "Data/DBbackup_d882af6bc9/");

/**
 * 系统备份文件存放目录
 * 此目录必须可写，建议移动到非WEB目录
 */
define("System_Backup_PATH", WEB_ROOT . "Data/Backup_d882af6bc9/");

/**
 * 系统升级文件存放目录
 * 此目录必须可写，建议移动到非WEB目录
 */
define("Upgrade_PATH", WEB_ROOT . "Data/Upgrade/");

/**
 * HTML静态缓存存放目录
 * 此目录必须可写，建议移动到非WEB目录
 */
define("HTML_PATH", WEB_ROOT . "Data/Temp/HTML/");

/**
 * 扩展存放目录
 * 此目录必须可写，建议移动到非WEB目录
 */
define("Extend_PATH", WEB_ROOT . "Extend/");

/**
 * 插件存放目录
 * 此目录必须可写，建议移动到非WEB目录
 */
define('Addon_PATH', WEB_ROOT . "Addons/");

/**
 * 上传文件存放目录
 * 此目录必须可写
 */
define("Upload_PATH", "Upload/");

/**
 * TIME_FIX
 *
 */
define("TIME_FIX", 0);


/**
 * BUILD_DIR_SECURE 目录安全，设置详细参考thinkphp手册
 */
define('BUILD_DIR_SECURE', false);


define('protect_model', true);
