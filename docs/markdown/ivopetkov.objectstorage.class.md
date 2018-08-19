# IvoPetkov\ObjectStorage

## Constants

##### const string VERSION

## Properties

##### public string $objectsDir

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The directory where the objects will be stored

##### public string $metadataDir

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The directory where the objects metadata will be stored

##### public string $tempDir

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The directory where temp library data will be stored

##### public int $lockRetriesCount

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of retries to make when waiting for locked (accessed by other scripts) objects

##### public int $lockRetryDelay

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time (in microseconds) between retries when waiting for locked objects

## Methods

##### public array [get](ivopetkov.objectstorage.get.method.md) ( array $parameters )

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retrieves object data for a specified key

##### public void [set](ivopetkov.objectstorage.set.method.md) ( array $parameters )

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saves object data for a specified key

##### public void [append](ivopetkov.objectstorage.append.method.md) ( array $parameters )

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Appends object data for a specified key. The object will be created if not existent.

##### public void [duplicate](ivopetkov.objectstorage.duplicate.method.md) ( array $parameters )

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Creates a copy of an object. It's metadata is copied too.

##### public void [rename](ivopetkov.objectstorage.rename.method.md) ( array $parameters )

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Renames an object

##### public void [delete](ivopetkov.objectstorage.delete.method.md) ( array $parameters )

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deletes an object and it's metadata

##### public array [search](ivopetkov.objectstorage.search.method.md) ( array $parameters )

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retrieves a list of all object matching the criteria specified

##### public boolean [isValidKey](ivopetkov.objectstorage.isvalidkey.method.md) ( string $key )

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checks whether the key specified is valid

##### public array [execute](ivopetkov.objectstorage.execute.method.md) ( array $commands )

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Executes list of commands

## Details

File: /src/ObjectStorage.php
