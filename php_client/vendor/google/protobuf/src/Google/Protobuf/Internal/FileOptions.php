<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>google.protobuf.FileOptions</code>
 */
class FileOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Sets the Java package where classes generated from this .proto will be
     * placed.  By default, the proto package is used, but this is often
     * inappropriate because proto packages do not normally start with backwards
     * domain names.
     *
     * Generated from protobuf field <code>optional string java_package = 1;</code>
     */
    private $java_package = '';
    private $has_java_package = false;
    /**
     * If set, all the classes from the .proto file are wrapped in a single
     * outer class with the given name.  This applies to both Proto1
     * (equivalent to the old "--one_java_file" option) and Proto2 (where
     * a .proto always translates to a single class, but you may want to
     * explicitly choose the class name).
     *
     * Generated from protobuf field <code>optional string java_outer_classname = 8;</code>
     */
    private $java_outer_classname = '';
    private $has_java_outer_classname = false;
    /**
     * If set true, then the Java code generator will generate a separate .java
     * file for each top-level message, enum, and service defined in the .proto
     * file.  Thus, these types will *not* be nested inside the outer class
     * named by java_outer_classname.  However, the outer class will still be
     * generated to contain the file's getDescriptor() method as well as any
     * top-level extensions defined in the file.
     *
     * Generated from protobuf field <code>optional bool java_multiple_files = 10 [default = false];</code>
     */
    private $java_multiple_files = false;
    private $has_java_multiple_files = false;
    /**
     * This option does nothing.
     *
     * Generated from protobuf field <code>optional bool java_generate_equals_and_hash = 20 [deprecated = true];</code>
     */
    private $java_generate_equals_and_hash = false;
    private $has_java_generate_equals_and_hash = false;
    /**
     * If set true, then the Java2 code generator will generate code that
     * throws an exception whenever an attempt is made to assign a non-UTF-8
     * byte sequence to a string field.
     * Message reflection will do the same.
     * However, an extension field still accepts non-UTF-8 byte sequences.
     * This option has no effect on when used with the lite runtime.
     *
     * Generated from protobuf field <code>optional bool java_string_check_utf8 = 27 [default = false];</code>
     */
    private $java_string_check_utf8 = false;
    private $has_java_string_check_utf8 = false;
    /**
     * Generated from protobuf field <code>optional .google.protobuf.FileOptions.OptimizeMode optimize_for = 9 [default = SPEED];</code>
     */
    private $optimize_for = 0;
    private $has_optimize_for = false;
    /**
     * Sets the Go package where structs generated from this .proto will be
     * placed. If omitted, the Go package will be derived from the following:
     *   - The basename of the package import path, if provided.
     *   - Otherwise, the package statement in the .proto file, if present.
     *   - Otherwise, the basename of the .proto file, without extension.
     *
     * Generated from protobuf field <code>optional string go_package = 11;</code>
     */
    private $go_package = '';
    private $has_go_package = false;
    /**
     * Should generic services be generated in each language?  "Generic" services
     * are not specific to any particular RPC system.  They are generated by the
     * main code generators in each language (without additional plugins).
     * Generic services were the only kind of service generation supported by
     * early versions of google.protobuf.
     * Generic services are now considered deprecated in favor of using plugins
     * that generate code specific to your particular RPC system.  Therefore,
     * these default to false.  Old code which depends on generic services should
     * explicitly set them to true.
     *
     * Generated from protobuf field <code>optional bool cc_generic_services = 16 [default = false];</code>
     */
    private $cc_generic_services = false;
    private $has_cc_generic_services = false;
    /**
     * Generated from protobuf field <code>optional bool java_generic_services = 17 [default = false];</code>
     */
    private $java_generic_services = false;
    private $has_java_generic_services = false;
    /**
     * Generated from protobuf field <code>optional bool py_generic_services = 18 [default = false];</code>
     */
    private $py_generic_services = false;
    private $has_py_generic_services = false;
    /**
     * Generated from protobuf field <code>optional bool php_generic_services = 42 [default = false];</code>
     */
    private $php_generic_services = false;
    private $has_php_generic_services = false;
    /**
     * Is this file deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for everything in the file, or it will be completely ignored; in the very
     * least, this is a formalization for deprecating files.
     *
     * Generated from protobuf field <code>optional bool deprecated = 23 [default = false];</code>
     */
    private $deprecated = false;
    private $has_deprecated = false;
    /**
     * Enables the use of arenas for the proto messages in this file. This applies
     * only to generated classes for C++.
     *
     * Generated from protobuf field <code>optional bool cc_enable_arenas = 31 [default = false];</code>
     */
    private $cc_enable_arenas = false;
    private $has_cc_enable_arenas = false;
    /**
     * Sets the objective c class prefix which is prepended to all objective c
     * generated classes from this .proto. There is no default.
     *
     * Generated from protobuf field <code>optional string objc_class_prefix = 36;</code>
     */
    private $objc_class_prefix = '';
    private $has_objc_class_prefix = false;
    /**
     * Namespace for generated classes; defaults to the package.
     *
     * Generated from protobuf field <code>optional string csharp_namespace = 37;</code>
     */
    private $csharp_namespace = '';
    private $has_csharp_namespace = false;
    /**
     * By default Swift generators will take the proto package and CamelCase it
     * replacing '.' with underscore and use that to prefix the types/symbols
     * defined. When this options is provided, they will use this value instead
     * to prefix the types/symbols defined.
     *
     * Generated from protobuf field <code>optional string swift_prefix = 39;</code>
     */
    private $swift_prefix = '';
    private $has_swift_prefix = false;
    /**
     * Sets the php class prefix which is prepended to all php generated classes
     * from this .proto. Default is empty.
     *
     * Generated from protobuf field <code>optional string php_class_prefix = 40;</code>
     */
    private $php_class_prefix = '';
    private $has_php_class_prefix = false;
    /**
     * Use this option to change the namespace of php generated classes. Default
     * is empty. When this option is empty, the package name will be used for
     * determining the namespace.
     *
     * Generated from protobuf field <code>optional string php_namespace = 41;</code>
     */
    private $php_namespace = '';
    private $has_php_namespace = false;
    /**
     * Use this option to change the namespace of php generated metadata classes.
     * Default is empty. When this option is empty, the proto file name will be used
     * for determining the namespace.
     *
     * Generated from protobuf field <code>optional string php_metadata_namespace = 44;</code>
     */
    private $php_metadata_namespace = '';
    private $has_php_metadata_namespace = false;
    /**
     * Use this option to change the package of ruby generated classes. Default
     * is empty. When this option is not set, the package name will be used for
     * determining the ruby package.
     *
     * Generated from protobuf field <code>optional string ruby_package = 45;</code>
     */
    private $ruby_package = '';
    private $has_ruby_package = false;
    /**
     * The parser stores options it doesn't recognize here.
     * See the documentation for the "Options" section above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    private $uninterpreted_option;
    private $has_uninterpreted_option = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $java_package
     *           Sets the Java package where classes generated from this .proto will be
     *           placed.  By default, the proto package is used, but this is often
     *           inappropriate because proto packages do not normally start with backwards
     *           domain names.
     *     @type string $java_outer_classname
     *           If set, all the classes from the .proto file are wrapped in a single
     *           outer class with the given name.  This applies to both Proto1
     *           (equivalent to the old "--one_java_file" option) and Proto2 (where
     *           a .proto always translates to a single class, but you may want to
     *           explicitly choose the class name).
     *     @type bool $java_multiple_files
     *           If set true, then the Java code generator will generate a separate .java
     *           file for each top-level message, enum, and service defined in the .proto
     *           file.  Thus, these types will *not* be nested inside the outer class
     *           named by java_outer_classname.  However, the outer class will still be
     *           generated to contain the file's getDescriptor() method as well as any
     *           top-level extensions defined in the file.
     *     @type bool $java_generate_equals_and_hash
     *           This option does nothing.
     *     @type bool $java_string_check_utf8
     *           If set true, then the Java2 code generator will generate code that
     *           throws an exception whenever an attempt is made to assign a non-UTF-8
     *           byte sequence to a string field.
     *           Message reflection will do the same.
     *           However, an extension field still accepts non-UTF-8 byte sequences.
     *           This option has no effect on when used with the lite runtime.
     *     @type int $optimize_for
     *     @type string $go_package
     *           Sets the Go package where structs generated from this .proto will be
     *           placed. If omitted, the Go package will be derived from the following:
     *             - The basename of the package import path, if provided.
     *             - Otherwise, the package statement in the .proto file, if present.
     *             - Otherwise, the basename of the .proto file, without extension.
     *     @type bool $cc_generic_services
     *           Should generic services be generated in each language?  "Generic" services
     *           are not specific to any particular RPC system.  They are generated by the
     *           main code generators in each language (without additional plugins).
     *           Generic services were the only kind of service generation supported by
     *           early versions of google.protobuf.
     *           Generic services are now considered deprecated in favor of using plugins
     *           that generate code specific to your particular RPC system.  Therefore,
     *           these default to false.  Old code which depends on generic services should
     *           explicitly set them to true.
     *     @type bool $java_generic_services
     *     @type bool $py_generic_services
     *     @type bool $php_generic_services
     *     @type bool $deprecated
     *           Is this file deprecated?
     *           Depending on the target platform, this can emit Deprecated annotations
     *           for everything in the file, or it will be completely ignored; in the very
     *           least, this is a formalization for deprecating files.
     *     @type bool $cc_enable_arenas
     *           Enables the use of arenas for the proto messages in this file. This applies
     *           only to generated classes for C++.
     *     @type string $objc_class_prefix
     *           Sets the objective c class prefix which is prepended to all objective c
     *           generated classes from this .proto. There is no default.
     *     @type string $csharp_namespace
     *           Namespace for generated classes; defaults to the package.
     *     @type string $swift_prefix
     *           By default Swift generators will take the proto package and CamelCase it
     *           replacing '.' with underscore and use that to prefix the types/symbols
     *           defined. When this options is provided, they will use this value instead
     *           to prefix the types/symbols defined.
     *     @type string $php_class_prefix
     *           Sets the php class prefix which is prepended to all php generated classes
     *           from this .proto. Default is empty.
     *     @type string $php_namespace
     *           Use this option to change the namespace of php generated classes. Default
     *           is empty. When this option is empty, the package name will be used for
     *           determining the namespace.
     *     @type string $php_metadata_namespace
     *           Use this option to change the namespace of php generated metadata classes.
     *           Default is empty. When this option is empty, the proto file name will be used
     *           for determining the namespace.
     *     @type string $ruby_package
     *           Use this option to change the package of ruby generated classes. Default
     *           is empty. When this option is not set, the package name will be used for
     *           determining the ruby package.
     *     @type \Google\Protobuf\Internal\UninterpretedOption[]|\Google\Protobuf\Internal\RepeatedField $uninterpreted_option
     *           The parser stores options it doesn't recognize here.
     *           See the documentation for the "Options" section above.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Sets the Java package where classes generated from this .proto will be
     * placed.  By default, the proto package is used, but this is often
     * inappropriate because proto packages do not normally start with backwards
     * domain names.
     *
     * Generated from protobuf field <code>optional string java_package = 1;</code>
     * @return string
     */
    public function getJavaPackage()
    {
        return $this->java_package;
    }

    /**
     * Sets the Java package where classes generated from this .proto will be
     * placed.  By default, the proto package is used, but this is often
     * inappropriate because proto packages do not normally start with backwards
     * domain names.
     *
     * Generated from protobuf field <code>optional string java_package = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJavaPackage($var)
    {
        GPBUtil::checkString($var, True);
        $this->java_package = $var;
        $this->has_java_package = true;

        return $this;
    }

    public function hasJavaPackage()
    {
        return $this->has_java_package;
    }

    /**
     * If set, all the classes from the .proto file are wrapped in a single
     * outer class with the given name.  This applies to both Proto1
     * (equivalent to the old "--one_java_file" option) and Proto2 (where
     * a .proto always translates to a single class, but you may want to
     * explicitly choose the class name).
     *
     * Generated from protobuf field <code>optional string java_outer_classname = 8;</code>
     * @return string
     */
    public function getJavaOuterClassname()
    {
        return $this->java_outer_classname;
    }

    /**
     * If set, all the classes from the .proto file are wrapped in a single
     * outer class with the given name.  This applies to both Proto1
     * (equivalent to the old "--one_java_file" option) and Proto2 (where
     * a .proto always translates to a single class, but you may want to
     * explicitly choose the class name).
     *
     * Generated from protobuf field <code>optional string java_outer_classname = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setJavaOuterClassname($var)
    {
        GPBUtil::checkString($var, True);
        $this->java_outer_classname = $var;
        $this->has_java_outer_classname = true;

        return $this;
    }

    public function hasJavaOuterClassname()
    {
        return $this->has_java_outer_classname;
    }

    /**
     * If set true, then the Java code generator will generate a separate .java
     * file for each top-level message, enum, and service defined in the .proto
     * file.  Thus, these types will *not* be nested inside the outer class
     * named by java_outer_classname.  However, the outer class will still be
     * generated to contain the file's getDescriptor() method as well as any
     * top-level extensions defined in the file.
     *
     * Generated from protobuf field <code>optional bool java_multiple_files = 10 [default = false];</code>
     * @return bool
     */
    public function getJavaMultipleFiles()
    {
        return $this->java_multiple_files;
    }

    /**
     * If set true, then the Java code generator will generate a separate .java
     * file for each top-level message, enum, and service defined in the .proto
     * file.  Thus, these types will *not* be nested inside the outer class
     * named by java_outer_classname.  However, the outer class will still be
     * generated to contain the file's getDescriptor() method as well as any
     * top-level extensions defined in the file.
     *
     * Generated from protobuf field <code>optional bool java_multiple_files = 10 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setJavaMultipleFiles($var)
    {
        GPBUtil::checkBool($var);
        $this->java_multiple_files = $var;
        $this->has_java_multiple_files = true;

        return $this;
    }

    public function hasJavaMultipleFiles()
    {
        return $this->has_java_multiple_files;
    }

    /**
     * This option does nothing.
     *
     * Generated from protobuf field <code>optional bool java_generate_equals_and_hash = 20 [deprecated = true];</code>
     * @return bool
     */
    public function getJavaGenerateEqualsAndHash()
    {
        return $this->java_generate_equals_and_hash;
    }

    /**
     * This option does nothing.
     *
     * Generated from protobuf field <code>optional bool java_generate_equals_and_hash = 20 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     */
    public function setJavaGenerateEqualsAndHash($var)
    {
        GPBUtil::checkBool($var);
        $this->java_generate_equals_and_hash = $var;
        $this->has_java_generate_equals_and_hash = true;

        return $this;
    }

    public function hasJavaGenerateEqualsAndHash()
    {
        return $this->has_java_generate_equals_and_hash;
    }

    /**
     * If set true, then the Java2 code generator will generate code that
     * throws an exception whenever an attempt is made to assign a non-UTF-8
     * byte sequence to a string field.
     * Message reflection will do the same.
     * However, an extension field still accepts non-UTF-8 byte sequences.
     * This option has no effect on when used with the lite runtime.
     *
     * Generated from protobuf field <code>optional bool java_string_check_utf8 = 27 [default = false];</code>
     * @return bool
     */
    public function getJavaStringCheckUtf8()
    {
        return $this->java_string_check_utf8;
    }

    /**
     * If set true, then the Java2 code generator will generate code that
     * throws an exception whenever an attempt is made to assign a non-UTF-8
     * byte sequence to a string field.
     * Message reflection will do the same.
     * However, an extension field still accepts non-UTF-8 byte sequences.
     * This option has no effect on when used with the lite runtime.
     *
     * Generated from protobuf field <code>optional bool java_string_check_utf8 = 27 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setJavaStringCheckUtf8($var)
    {
        GPBUtil::checkBool($var);
        $this->java_string_check_utf8 = $var;
        $this->has_java_string_check_utf8 = true;

        return $this;
    }

    public function hasJavaStringCheckUtf8()
    {
        return $this->has_java_string_check_utf8;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.FileOptions.OptimizeMode optimize_for = 9 [default = SPEED];</code>
     * @return int
     */
    public function getOptimizeFor()
    {
        return $this->optimize_for;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.FileOptions.OptimizeMode optimize_for = 9 [default = SPEED];</code>
     * @param int $var
     * @return $this
     */
    public function setOptimizeFor($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\Internal\FileOptions_OptimizeMode::class);
        $this->optimize_for = $var;
        $this->has_optimize_for = true;

        return $this;
    }

    public function hasOptimizeFor()
    {
        return $this->has_optimize_for;
    }

    /**
     * Sets the Go package where structs generated from this .proto will be
     * placed. If omitted, the Go package will be derived from the following:
     *   - The basename of the package import path, if provided.
     *   - Otherwise, the package statement in the .proto file, if present.
     *   - Otherwise, the basename of the .proto file, without extension.
     *
     * Generated from protobuf field <code>optional string go_package = 11;</code>
     * @return string
     */
    public function getGoPackage()
    {
        return $this->go_package;
    }

    /**
     * Sets the Go package where structs generated from this .proto will be
     * placed. If omitted, the Go package will be derived from the following:
     *   - The basename of the package import path, if provided.
     *   - Otherwise, the package statement in the .proto file, if present.
     *   - Otherwise, the basename of the .proto file, without extension.
     *
     * Generated from protobuf field <code>optional string go_package = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setGoPackage($var)
    {
        GPBUtil::checkString($var, True);
        $this->go_package = $var;
        $this->has_go_package = true;

        return $this;
    }

    public function hasGoPackage()
    {
        return $this->has_go_package;
    }

    /**
     * Should generic services be generated in each language?  "Generic" services
     * are not specific to any particular RPC system.  They are generated by the
     * main code generators in each language (without additional plugins).
     * Generic services were the only kind of service generation supported by
     * early versions of google.protobuf.
     * Generic services are now considered deprecated in favor of using plugins
     * that generate code specific to your particular RPC system.  Therefore,
     * these default to false.  Old code which depends on generic services should
     * explicitly set them to true.
     *
     * Generated from protobuf field <code>optional bool cc_generic_services = 16 [default = false];</code>
     * @return bool
     */
    public function getCcGenericServices()
    {
        return $this->cc_generic_services;
    }

    /**
     * Should generic services be generated in each language?  "Generic" services
     * are not specific to any particular RPC system.  They are generated by the
     * main code generators in each language (without additional plugins).
     * Generic services were the only kind of service generation supported by
     * early versions of google.protobuf.
     * Generic services are now considered deprecated in favor of using plugins
     * that generate code specific to your particular RPC system.  Therefore,
     * these default to false.  Old code which depends on generic services should
     * explicitly set them to true.
     *
     * Generated from protobuf field <code>optional bool cc_generic_services = 16 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setCcGenericServices($var)
    {
        GPBUtil::checkBool($var);
        $this->cc_generic_services = $var;
        $this->has_cc_generic_services = true;

        return $this;
    }

    public function hasCcGenericServices()
    {
        return $this->has_cc_generic_services;
    }

    /**
     * Generated from protobuf field <code>optional bool java_generic_services = 17 [default = false];</code>
     * @return bool
     */
    public function getJavaGenericServices()
    {
        return $this->java_generic_services;
    }

    /**
     * Generated from protobuf field <code>optional bool java_generic_services = 17 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setJavaGenericServices($var)
    {
        GPBUtil::checkBool($var);
        $this->java_generic_services = $var;
        $this->has_java_generic_services = true;

        return $this;
    }

    public function hasJavaGenericServices()
    {
        return $this->has_java_generic_services;
    }

    /**
     * Generated from protobuf field <code>optional bool py_generic_services = 18 [default = false];</code>
     * @return bool
     */
    public function getPyGenericServices()
    {
        return $this->py_generic_services;
    }

    /**
     * Generated from protobuf field <code>optional bool py_generic_services = 18 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setPyGenericServices($var)
    {
        GPBUtil::checkBool($var);
        $this->py_generic_services = $var;
        $this->has_py_generic_services = true;

        return $this;
    }

    public function hasPyGenericServices()
    {
        return $this->has_py_generic_services;
    }

    /**
     * Generated from protobuf field <code>optional bool php_generic_services = 42 [default = false];</code>
     * @return bool
     */
    public function getPhpGenericServices()
    {
        return $this->php_generic_services;
    }

    /**
     * Generated from protobuf field <code>optional bool php_generic_services = 42 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setPhpGenericServices($var)
    {
        GPBUtil::checkBool($var);
        $this->php_generic_services = $var;
        $this->has_php_generic_services = true;

        return $this;
    }

    public function hasPhpGenericServices()
    {
        return $this->has_php_generic_services;
    }

    /**
     * Is this file deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for everything in the file, or it will be completely ignored; in the very
     * least, this is a formalization for deprecating files.
     *
     * Generated from protobuf field <code>optional bool deprecated = 23 [default = false];</code>
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Is this file deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for everything in the file, or it will be completely ignored; in the very
     * least, this is a formalization for deprecating files.
     *
     * Generated from protobuf field <code>optional bool deprecated = 23 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkBool($var);
        $this->deprecated = $var;
        $this->has_deprecated = true;

        return $this;
    }

    public function hasDeprecated()
    {
        return $this->has_deprecated;
    }

    /**
     * Enables the use of arenas for the proto messages in this file. This applies
     * only to generated classes for C++.
     *
     * Generated from protobuf field <code>optional bool cc_enable_arenas = 31 [default = false];</code>
     * @return bool
     */
    public function getCcEnableArenas()
    {
        return $this->cc_enable_arenas;
    }

    /**
     * Enables the use of arenas for the proto messages in this file. This applies
     * only to generated classes for C++.
     *
     * Generated from protobuf field <code>optional bool cc_enable_arenas = 31 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setCcEnableArenas($var)
    {
        GPBUtil::checkBool($var);
        $this->cc_enable_arenas = $var;
        $this->has_cc_enable_arenas = true;

        return $this;
    }

    public function hasCcEnableArenas()
    {
        return $this->has_cc_enable_arenas;
    }

    /**
     * Sets the objective c class prefix which is prepended to all objective c
     * generated classes from this .proto. There is no default.
     *
     * Generated from protobuf field <code>optional string objc_class_prefix = 36;</code>
     * @return string
     */
    public function getObjcClassPrefix()
    {
        return $this->objc_class_prefix;
    }

    /**
     * Sets the objective c class prefix which is prepended to all objective c
     * generated classes from this .proto. There is no default.
     *
     * Generated from protobuf field <code>optional string objc_class_prefix = 36;</code>
     * @param string $var
     * @return $this
     */
    public function setObjcClassPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->objc_class_prefix = $var;
        $this->has_objc_class_prefix = true;

        return $this;
    }

    public function hasObjcClassPrefix()
    {
        return $this->has_objc_class_prefix;
    }

    /**
     * Namespace for generated classes; defaults to the package.
     *
     * Generated from protobuf field <code>optional string csharp_namespace = 37;</code>
     * @return string
     */
    public function getCsharpNamespace()
    {
        return $this->csharp_namespace;
    }

    /**
     * Namespace for generated classes; defaults to the package.
     *
     * Generated from protobuf field <code>optional string csharp_namespace = 37;</code>
     * @param string $var
     * @return $this
     */
    public function setCsharpNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->csharp_namespace = $var;
        $this->has_csharp_namespace = true;

        return $this;
    }

    public function hasCsharpNamespace()
    {
        return $this->has_csharp_namespace;
    }

    /**
     * By default Swift generators will take the proto package and CamelCase it
     * replacing '.' with underscore and use that to prefix the types/symbols
     * defined. When this options is provided, they will use this value instead
     * to prefix the types/symbols defined.
     *
     * Generated from protobuf field <code>optional string swift_prefix = 39;</code>
     * @return string
     */
    public function getSwiftPrefix()
    {
        return $this->swift_prefix;
    }

    /**
     * By default Swift generators will take the proto package and CamelCase it
     * replacing '.' with underscore and use that to prefix the types/symbols
     * defined. When this options is provided, they will use this value instead
     * to prefix the types/symbols defined.
     *
     * Generated from protobuf field <code>optional string swift_prefix = 39;</code>
     * @param string $var
     * @return $this
     */
    public function setSwiftPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->swift_prefix = $var;
        $this->has_swift_prefix = true;

        return $this;
    }

    public function hasSwiftPrefix()
    {
        return $this->has_swift_prefix;
    }

    /**
     * Sets the php class prefix which is prepended to all php generated classes
     * from this .proto. Default is empty.
     *
     * Generated from protobuf field <code>optional string php_class_prefix = 40;</code>
     * @return string
     */
    public function getPhpClassPrefix()
    {
        return $this->php_class_prefix;
    }

    /**
     * Sets the php class prefix which is prepended to all php generated classes
     * from this .proto. Default is empty.
     *
     * Generated from protobuf field <code>optional string php_class_prefix = 40;</code>
     * @param string $var
     * @return $this
     */
    public function setPhpClassPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->php_class_prefix = $var;
        $this->has_php_class_prefix = true;

        return $this;
    }

    public function hasPhpClassPrefix()
    {
        return $this->has_php_class_prefix;
    }

    /**
     * Use this option to change the namespace of php generated classes. Default
     * is empty. When this option is empty, the package name will be used for
     * determining the namespace.
     *
     * Generated from protobuf field <code>optional string php_namespace = 41;</code>
     * @return string
     */
    public function getPhpNamespace()
    {
        return $this->php_namespace;
    }

    /**
     * Use this option to change the namespace of php generated classes. Default
     * is empty. When this option is empty, the package name will be used for
     * determining the namespace.
     *
     * Generated from protobuf field <code>optional string php_namespace = 41;</code>
     * @param string $var
     * @return $this
     */
    public function setPhpNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->php_namespace = $var;
        $this->has_php_namespace = true;

        return $this;
    }

    public function hasPhpNamespace()
    {
        return $this->has_php_namespace;
    }

    /**
     * Use this option to change the namespace of php generated metadata classes.
     * Default is empty. When this option is empty, the proto file name will be used
     * for determining the namespace.
     *
     * Generated from protobuf field <code>optional string php_metadata_namespace = 44;</code>
     * @return string
     */
    public function getPhpMetadataNamespace()
    {
        return $this->php_metadata_namespace;
    }

    /**
     * Use this option to change the namespace of php generated metadata classes.
     * Default is empty. When this option is empty, the proto file name will be used
     * for determining the namespace.
     *
     * Generated from protobuf field <code>optional string php_metadata_namespace = 44;</code>
     * @param string $var
     * @return $this
     */
    public function setPhpMetadataNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->php_metadata_namespace = $var;
        $this->has_php_metadata_namespace = true;

        return $this;
    }

    public function hasPhpMetadataNamespace()
    {
        return $this->has_php_metadata_namespace;
    }

    /**
     * Use this option to change the package of ruby generated classes. Default
     * is empty. When this option is not set, the package name will be used for
     * determining the ruby package.
     *
     * Generated from protobuf field <code>optional string ruby_package = 45;</code>
     * @return string
     */
    public function getRubyPackage()
    {
        return $this->ruby_package;
    }

    /**
     * Use this option to change the package of ruby generated classes. Default
     * is empty. When this option is not set, the package name will be used for
     * determining the ruby package.
     *
     * Generated from protobuf field <code>optional string ruby_package = 45;</code>
     * @param string $var
     * @return $this
     */
    public function setRubyPackage($var)
    {
        GPBUtil::checkString($var, True);
        $this->ruby_package = $var;
        $this->has_ruby_package = true;

        return $this;
    }

    public function hasRubyPackage()
    {
        return $this->has_ruby_package;
    }

    /**
     * The parser stores options it doesn't recognize here.
     * See the documentation for the "Options" section above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUninterpretedOption()
    {
        return $this->uninterpreted_option;
    }

    /**
     * The parser stores options it doesn't recognize here.
     * See the documentation for the "Options" section above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     * @param \Google\Protobuf\Internal\UninterpretedOption[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUninterpretedOption($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Internal\UninterpretedOption::class);
        $this->uninterpreted_option = $arr;
        $this->has_uninterpreted_option = true;

        return $this;
    }

    public function hasUninterpretedOption()
    {
        return $this->has_uninterpreted_option;
    }

}

