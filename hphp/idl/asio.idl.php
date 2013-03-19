<?php
/**
 * Automatically generated by running "php schema.php asio".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 *
 * @nolint
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
//   'taint_observer' => taint propagation information
//     array (
//       'set_mask' => which bits to set automatically
//       'clear_mask' => which bits to clear automatically
//     )
// )


DefineFunction(
  array(
    'name'   => "asio_enter_context",
    'desc'   => "DEPRECATED: does nothing",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "asio_exit_context",
    'desc'   => "DEPRECATED: does nothing",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "asio_get_current_context_idx",
    'desc'   => "Get index of the current scheduler context, or 0 if there is none",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Int32,
      'desc'   => "An index of the current scheduler context",
    ),
  ));

DefineFunction(
  array(
    'name'   => "asio_get_running_in_context",
    'desc'   => "Get currently running wait handle in a context specified by its index",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Object,
      'desc'   => "A ContinuationWaitHandle that is running in a specified context",
    ),
    'args'   => array(
      array(
        'name'   => "ctx_idx",
        'type'   => Int32,
        'desc'   => "An index of a specified context",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "asio_get_running",
    'desc'   => "Get currently running wait handle, or null if there is none",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Object,
      'desc'   => "A ContinuationWaitHandle that is running in the current context",
    ),
  ));

DefineFunction(
  array(
    'name'   => "asio_get_current",
    'desc'   => "DEPRECATED: use asio_get_running",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Object,
      'desc'   => "A ContinuationWaitHandle that is running in the current context",
    ),
  ));

DefineFunction(
  array(
    'name'   => "asio_set_on_failed_callback",
    'desc'   => "Set callback to be called when wait handle fails",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "on_failed_cb",
        'type'   => Object,
        'desc'   => "A Closure to be called when wait handle fails",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "asio_set_on_started_callback",
    'desc'   => "Set callback to be called when a continuation is started",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "on_started_cb",
        'type'   => Object,
        'desc'   => "A Closure to be called when wait handle is started",
      ),
    ),
  ));


///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

///////////////////////////////////////////////////////////////////////////////

BeginClass(
  array(
    'name'   => "WaitHandle",
    'desc'   => "A wait handle representing asynchronous operation",
    'flags'  => HasDocComment | IsAbstract | IsCppAbstract,
    'ifaces' => array('Awaitable'),
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "getWaitHandle",
    'desc'   => "Return this wait handle (for Awaitable interface)",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Object,
    ),
  ));

DefineFunction(
  array(
    'name'   => "import",
    'desc'   => "Import this wait handle to the current scheduler context",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "join",
    'desc'   => "Wait until this wait handle is finished and return its result (operates in a new scheduler context)",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "A result of the operation represented by given wait handle",
    ),
  ));

DefineFunction(
  array(
    'name'   => "isFinished",
    'desc'   => "Check if this wait handle finished (succeeded or failed)",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "A boolean indicating whether this wait handle finished",
    ),
  ));

DefineFunction(
  array(
    'name'   => "isSucceeded",
    'desc'   => "Check if this wait handle succeeded",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "A boolean indicating whether this wait handle succeeded",
    ),
  ));

DefineFunction(
  array(
    'name'   => "isFailed",
    'desc'   => "Check if this wait handle failed",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "A boolean indicating whether this wait handle failed",
    ),
  ));

DefineFunction(
  array(
    'name'   => "getID",
    'desc'   => "Get unique ID of this wait handle (amongst existing ones)",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Int64,
      'desc'   => "An integer representing unique ID of this wait handle",
    ),
  ));

DefineFunction(
  array(
    'name'   => "getName",
    'desc'   => "Get name of the operation behind this wait handle",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "A name of the operation behind this wait handle",
    ),
  ));

DefineFunction(
  array(
    'name'   => "getExceptionIfFailed",
    'desc'   => "Get exception if this wait handle has failed, or null",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Object,
      'desc'   => "An exception if this wait handle has failed, or null",
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => "StaticWaitHandle",
    'parent' => "WaitHandle",
    'desc'   => "A wait handle that is always finished",
    'flags'  => HasDocComment | IsAbstract | IsCppAbstract,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => "StaticResultWaitHandle",
    'parent' => "StaticWaitHandle",
    'desc'   => "A wait handle representing static result",
    'flags'  => HasDocComment,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "create",
    'desc'   => "Create a wait handle that always succeeds with a given result",
    'flags'  => HasDocComment | IsStatic,
    'return' => array(
      'type'   => Object,
      'desc'   => "A StaticResultWaitHandle representing given result",
    ),
    'args'   => array(
      array(
        'name'   => "result",
        'type'   => Variant,
        'desc'   => "A result wait handle will succeed with",
      )
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => "StaticExceptionWaitHandle",
    'parent' => "StaticWaitHandle",
    'desc'   => "A wait handle representing statically failed operation",
    'flags'  => HasDocComment,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "create",
    'desc'   => "Create a wait handle that always fails with a given exception",
    'flags'  => HasDocComment | IsStatic,
    'return' => array(
      'type'   => Object,
      'desc'   => "A StaticExceptionWaitHandle representing given exception",
    ),
    'args'   => array(
      array(
        'name'   => "exception",
        'type'   => Object,
        'desc'   => "An exception wait handle will fail with",
      )
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => "WaitableWaitHandle",
    'parent' => "WaitHandle",
    'desc'   => "A wait handle that can be waited upon",
    'flags'  => HasDocComment | IsAbstract | IsCppAbstract,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "getContextIdx",
    'desc'   => "Get index of the scheduler context this wait handle operates in",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Int32,
      'desc'   => "An index of scheduler context this wait handle operates in",
    ),
  ));

DefineFunction(
  array(
    'name'   => "getCreator",
    'desc'   => "Get wait handle that created this wait handle",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Object,
      'desc'   => "A ContinuationWaitHandle that was being executed when this wait handle was constructed",
    ),
  ));

DefineFunction(
  array(
    'name'   => "getParents",
    'desc'   => "Get wait handles blocked on this wait handle",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => VariantVec,
      'desc'   => "An array of BlockableWaitHandles blocked on this wait handle",
    ),
  ));

DefineFunction(
  array(
    'name'   => "getStackTrace",
    'desc'   => "Get stack trace of this wait handle",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => VariantVec,
      'desc'   => "An array of WaitableWaitHandles representing full stack trace, starting with this wait handle",
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => "BlockableWaitHandle",
    'parent' => "WaitableWaitHandle",
    'desc'   => "A wait handle that can be blocked on a dependency",
    'flags'  => HasDocComment | IsAbstract | IsCppAbstract,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => "ContinuationWaitHandle",
    'parent' => "BlockableWaitHandle",
    'desc'   => "A wait handle representing asynchronous execution powered by Continuation",
    'flags'  => HasDocComment,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "start",
    'desc'   => "Start asynchronous execution of a given Continuation",
    'flags'  => HasDocComment | IsStatic,
    'return' => array(
      'type'   => Object,
      'desc'   => "A WaitHandle representing started Continuation",
    ),
    'args'   => array(
      array(
        'name'   => "continuation",
        'type'   => Object,
        'desc'   => "A Continuation to be started",
      ),
      array(
        'name'   => "prio",
        'type'   => Int32,
        'desc'   => "Execution priority",
        'value'  => "0",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "markCurrentAsSucceeded",
    'desc'   => "Mark currently running Continuation as succeeded and set its result",
    'flags'  => HasDocComment | IsStatic,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "result",
        'type'   => Variant,
        'desc'   => "A result of the currently running Continuation",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "markCurrentAsTailCall",
    'desc'   => "Mark currently running Continuation for a tail call execution",
    'flags'  => HasDocComment | IsStatic,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "getPrivData",
    'desc'   => "Get user's private data",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => Object,
      'desc'   => "An Object with user's private data",
    ),
  ));

DefineFunction(
  array(
    'name'   => "setPrivData",
    'desc'   => "Set user's private data",
    'flags'  => HasDocComment,
    'return' => array(
      'type'   => null,
    ),
    'args' => array(
      array(
        'name'   => 'data',
        'type'   => Object,
        'desc'   => "An Object with user's private data",
      ),
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => "GenArrayWaitHandle",
    'parent' => "BlockableWaitHandle",
    'desc'   => "A wait handle representing an array of asynchronous operations",
    'flags'  => HasDocComment,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "create",
    'desc'   => "Create a wait handle that waits for a given array of dependencies",
    'flags'  => HasDocComment | IsStatic,
    'return' => array(
      'type'   => Object,
      'desc'   => "A WaitHandle that will wait for a given array of dependencies and return their results",
    ),
    'args'   => array(
      array(
        'name'   => "dependencies",
        'type'   => VariantMap,
        'desc'   => "An Array of dependencies to wait for",
      ),
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => "SetResultToRefWaitHandle",
    'parent' => "BlockableWaitHandle",
    'desc'   => "A wait handle proxy that sets result to a given reference",
    'flags'  => HasDocComment,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "create",
    'desc'   => "Create a wait handle that stores result of a dependency to a given reference",
    'flags'  => HasDocComment | IsStatic,
    'return' => array(
      'type'   => Object,
      'desc'   => "A WaitHandle that will store the result of a dependency to a given reference",
    ),
    'args'   => array(
      array(
        'name'   => "wait_handle",
        'type'   => Object,
        'desc'   => "A wait handle to wait for",
      ),
      array(
        'name'   => "ref",
        'type'   => Variant | Reference,
        'desc'   => "A reference to set the result to",
      ),
    ),
  ));

EndClass();

BeginClass(
  array(
    'name'   => "RescheduleWaitHandle",
    'parent' => "WaitableWaitHandle",
    'desc'   => "A wait handle that succeeds with null once desired scheduling priority is eligible for execution",
    'flags'  => HasDocComment,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'flags'  => HasDocComment | IsPrivate,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "create",
    'desc'   => "Create a wait handle that succeeds once desired scheduling priority is eligible for execution",
    'flags'  => HasDocComment | IsStatic,
    'return' => array(
      'type'   => Object,
      'desc'   => "A RescheduleWaitHandle that succeeds once desired scheduling priority is eligible for execution",
    ),
    'args'   => array(
      array(
        'name'   => "queue",
        'type'   => Int32,
        'desc'   => "A scheduling queue to use (defined by QUEUE_* constants)",
      ),
      array(
        'name'   => "priority",
        'type'   => Int32,
        'desc'   => "A non-negative number indicating scheduling priority (0 runs first)",
      ),
    ),
  ));

DefineConstant(
  array(
    'name'   => "QUEUE_DEFAULT",
    'type'   => Int32,
    'desc'   => "A queue that is run whenever there is nothing else to do",
  ));

DefineConstant(
  array(
    'name'   => "QUEUE_NO_PENDING_IO",
    'type'   => Int32,
    'desc'   => "A queue that is run only once there is no pending I/O operation",
  ));

EndClass();
