/* tapkee extension for PHP */

#ifndef PHP_TAPKEE_H
# define PHP_TAPKEE_H

extern zend_module_entry tapkee_module_entry;
# define phpext_tapkee_ptr &tapkee_module_entry

# define PHP_TAPKEE_VERSION "0.1.0"

# if defined(ZTS) && defined(COMPILE_DL_TAPKEE)
ZEND_TSRMLS_CACHE_EXTERN()
# endif

#endif	/* PHP_TAPKEE_H */
