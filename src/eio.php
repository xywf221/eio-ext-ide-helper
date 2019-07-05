<?php
/**
 * @autohr by <xydk936>.
 * Date: 2019-07-04
 * Time: 10:51
 */

/**
 * Constants
 * @link https://www.php.net/manual/en/eio.constants.php
 */
define('EIO_PRI_MIN', -4);
define('EIO_PRI_DEFAULT', 0);
define('EIO_PRI_MAX', 4);
define('EIO_SEEK_SET', 0);
define('EIO_SEEK_CUR', 1);
define('EIO_SEEK_END', 0);
define('EIO_READDIR_DENTS', 1);
define('EIO_READDIR_DIRS_FIRST', 2);
define('EIO_READDIR_STAT_ORDER', 4);
define('EIO_READDIR_FOUND_UNKNOWN', 128);
define('EIO_DT_UNKNOWN', 0);
define('EIO_DT_FIFO', 1);
define('EIO_DT_CHR', 2);
define('EIO_DT_MPC', 3);
define('EIO_DT_DIR', 4);
define('EIO_DT_NAM', 5);
define('EIO_DT_BLK', 6);
define('EIO_DT_MPB', 7);
define('EIO_DT_REG', 8);
define('EIO_DT_NWK', 9);
define('EIO_DT_CMP', 9);
define('EIO_DT_LNK', 10);
define('EIO_DT_SOCK', 12);
define('EIO_DT_DOOR', 13);
define('EIO_DT_WHT', 14);
define('EIO_DT_MAX', 15);
define('EIO_O_RDONLY', 0);
define('EIO_O_WRONLY', 1);
define('EIO_O_RDWR', 2);
define('EIO_O_NONBLOCK', 4);
define('EIO_O_APPEND', 8);
define('EIO_O_CREAT', 512);
define('EIO_O_TRUNC', 1024);
define('EIO_O_EXCL', 2048);
define('EIO_O_FSYNC', 128);
define('EIO_S_IRUSR', 256);
define('EIO_S_IWUSR', 128);
define('EIO_S_IXUSR', 64);
define('EIO_S_IRGRP', 32);
define('EIO_S_IWGRP', 16);
define('EIO_S_IXGRP', 8);
define('EIO_S_IROTH', 4);
define('EIO_S_IWOTH', 2);
define('EIO_S_IXOTH', 1);
define('EIO_S_IFREG', 32768);
define('EIO_S_IFCHR', 8192);
define('EIO_S_IFBLK', 24576);
define('EIO_S_IFIFO', 4096);
define('EIO_S_IFSOCK', 0);
define('EIO_SYNC_FILE_RANGE_WAIT_BEFORE', 1);
define('EIO_SYNC_FILE_RANGE_WRITE', 2);
define('EIO_SYNC_FILE_RANGE_WAIT_AFTER', 4);
define('EIO_FALLOC_FL_KEEP_SIZE', 1);
/**
 * @link https://www.php.net/manual/zh/function.eio-init.php
 * @return void
 */
function eio_init()
{
}


/**
 * @param int $delay <p>
 * Delay in seconds
 * </p>
 * @param int $pri
 * The request priority: EIO_PRI_DEFAULT, EIO_PRI_MIN, EIO_PRI_MAX, or NULL. If NULL passed, pri internally is set to EIO_PRI_DEFAULT.
 * @param callable $callback
 * @param mixed $data
 * @return resource|false
 * <p>
 * eio_busy() returns request resource on success or FALSE on error.
 * </p>
 */
function eio_busy($delay, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param resource $req
 * @return void
 */
function eio_cancel($req)
{
}

/**
 * @param string $path
 * @param int $mode
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_chmod($path, $mode, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $uid
 * @param int $gid
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_chown($path, $uid, $gid = -1, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param $fd
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_close($fd, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param callable $execute
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_custom($execute, $pri, $callback, $data = NULL)
{
}

/**
 * @param mixed $fd
 * @param mixed $fd2
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_dup2($fd, $fd2, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @return void
 */
function eio_event_loop()
{
}

/**
 * @param mixed $fd
 * @param int $mode
 * @param int $offset
 * @param int $length
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 */
function eio_fallocate($fd, $mode, $offset, $length, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param mixed $fd
 * @param int $mode
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 */
function eio_fchmod($fd, $mode, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param mixed $fd
 * @param int $uid
 * @param int $gid
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_fchown($fd, $uid, $gid = -1, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param mixed $fd
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_fdatasync($fd, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param mixed $fd
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_fstat($fd, $pri, $callback, $data)
{
}

/**
 * @param mixed $fd
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_fstatvfs($fd, $pri, $callback, $data)
{
}

/**
 * @param mixed $fd
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_fsync($fd, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param int $fd
 * @param int $offset
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_ftruncate($fd, $offset = 0, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param mixed $fd
 * @param float $atime
 * @param float $mtime
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_futime($fd, $atime, $mtime, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @return mixed
 */
function eio_get_event_stream()
{
}

/**
 * @param resource $req
 * @return string
 */
function eio_get_last_error($req)
{
}

/**
 * @param resource $grp
 * @param resource $req
 * @return void
 */
function eio_grp_add($grp, $req)
{
}

/**
 * @param resource $grp
 * @return void
 */
function eio_grp_cancel($grp)
{
}

/**
 * @param resource $grp
 * @param int $limit
 * @return void
 */
function eio_grp_limit($grp, $limit)
{
}

/**
 * @param callable $callback
 * @param string $data
 * @return resource
 */
function eio_grp($callback, $data = NULL)
{
}

/**
 * @param string $path
 * @param string $new_path
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_link($path, $new_path, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_lstat($path, $pri, $callback, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $mode
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_mkdir($path, $mode, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $mode
 * @param int $dev
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_mknod($path, $mode, $dev, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_nop($pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @return int
 */
function eio_npending()
{
}

/**
 * @return int
 */
function eio_nready()
{
}

/**
 * @return int
 */
function eio_nreqs()
{
}

/**
 * @return int
 */
function eio_nthreads()
{
}

/**
 * @param string $path
 * @param int $flags
 * @param int $mode
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_open($path, $flags, $mode, $pri, $callback, $data = NULL)
{
}

/**
 * @return int
 */
function eio_poll()
{
}

/**
 * @param mixed $fd
 * @param int $length
 * @param int $offset
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_read($fd, $length, $offset, $pri, $callback, $data = NULL)
{
}


/**
 * @param mixed $fd
 * @param int $offset
 * @param int $length
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_readahead($fd, $offset, $length, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $flags
 * @param int $pri
 * @param callable $callback
 * @param string $data
 * @return resource
 */
function eio_readdir($path, $flags, $pri, $callback, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * @param string $data
 * @return resource
 */
function eio_readlink($path, $pri, $callback, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * @param string $data
 * @return resource
 */
function eio_realpath($path, $pri, $callback, $data = NULL)
{
}

/**
 * @param string $path
 * @param string $new_path
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_rename($path, $new_path, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_rmdir($path, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param mixed $fd
 * @param int $offset
 * @param int $whence
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_seek($fd, $offset, $whence, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param mixed $out_fd
 * @param mixed $in_fd
 * @param int $offset
 * @param int $length
 * @param int $pri
 * @param callable $callback
 * @param string $data
 * @return  resource
 */
function eio_sendfile($out_fd, $in_fd, $offset, $length, $pri, $callback, $data)
{
}

/**
 * @param int $nthreads
 */
function eio_set_max_idle($nthreads)
{
}

/**
 * @param int $nthreads
 */
function eio_set_max_parallel($nthreads)
{
}

/**
 * @param int $nreqs
 */
function eio_set_max_poll_reqs($nreqs)
{
}

/**
 * @param float $nseconds
 */
function eio_set_max_poll_time($nseconds)
{
}

/**
 * @param string $nthreads
 */
function eio_set_min_parallel($nthreads)
{
}

/**
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_stat($path, $pri, $callback, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_statvfs($path, $pri, $callback, $data = NULL)
{
}

/**
 * @param string $path
 * @param string $new_path
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_symlink($path, $new_path, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}


/**
 * @param mixed $fd
 * @param int $offset
 * @param int $nbytes
 * @param int $flags
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_sync_file_range($fd, $offset, $nbytes, $flags, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 */
function eio_sync($pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param mixed $fd
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_syncfs($fd, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param string $path
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_unlink($path, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}

/**
 * @param string $path
 * @param float $atime
 * @param float $mtime
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_utime($path, $atime, $mtime, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}


/**
 * @param mixed $fd
 * @param string $str
 * @param int $length
 * @param int $offset
 * @param int $pri
 * @param callable $callback
 * @param mixed $data
 * @return resource
 */
function eio_write($fd, $str, $length = 0, $offset = 0, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL)
{
}
