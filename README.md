<h3>Supported:</h3>
Account, Ads, Apps, Audio, Auth, Board, Database, Docs, Fave, Friends, Gifts, Groups,
Leads, Likes, Market, Messages, Newsfeed, Notes, Notifications, Orders, Pages, Photos,
Places, Polls, Search, Secure, Stats, Status, Storage, Users, Utils, Video, Wall, Widgets

<h3>How to install:</h3>

**1) Download [composer](https://getcomposer.org/download/) :**
<pre>
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" <br>
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" <br>
php composer-setup.php <br>
php -r "unlink('composer-setup.php');" 
</pre>
**2) Install SDK:**
<pre>
php composer.phar require programmis/php-vk-api-sdk
</pre>
**3) Get token vkontakte:**
<pre>
http://oauth.vk.com/authorize?client_id=3682744&scope=friends,wall,offline,photos,market&redirect_uri=http://oauth.vk.com/blank.html&display=page&response_type=token <br>
in the address bar: <br>
https://oauth.vk.com/blank.html#access_token=**345345345345345345345345345d73e7de6acf1475ca460d**&expires_in=0&user_id=1 
</pre>

<h3>Examples:</h3>
**Upload photo**
```php
$server = new PhotosGetUploadServer($token);
$server->setAlbumId($album_id)
    ->setGroupId($group_id);
if (!$server->doRequest()) {
    return;
}
if (!$server->upload([$img_path])) {
    return;
}
$uploadResult = $server->getUploadResult();
$photos = new PhotosSave($token);
$photos->setAlbumId($album_id)
    ->setGroupId($group_id)
    ->setServer($uploadResult->getServer())
    ->setPhotosList($uploadResult->getPhotosList())
    ->setHash($uploadResult->getHash())
    ->setCaption($text);
if (!$photos->doRequest()) {
    return;
}
```
**Obtain detailed information about users VKontakte:**
```php
$userGet = new UsersGet();
$result = $userGet->setUserId(1)->setField('sex')->doRequest();
if( $result === true ){
    $userInfo = $userGet->getUsersInfo();    
    foreach($userInfo as $uI ){
        echo $uI->getId() . "\n";
        echo $uI->getFirstName() . "\n";
        echo $uI->getLastName() . "\n";
        echo $uI->getSex() . "\n";
        echo "-------------------------\n";
    }
}
```
**Join this group or to attend a meeting VKontakte:**
```php
$joinGroup = new GroupsJoin();
$result = $joinGroup->setGroupId(1)->doRequest();
if( $result === true ){
    echo $joinGroup->getResponse();
}
```
**Place a record on the wall VKontakte:**
```php
$wallPost = new WallPost();
$result = $wallPost->setOwnerId(1)
    ->setMessage("test")
    ->doRequest();
if( $result === true ){
    echo $wallPost->getPostId();    
}
```
**Create a new album VKontakte:**
```php
$album = new PhotosCreateAlbum();
$album->setTitle("My new album");
$result = $album->doRequest();
if( $result === true ){
    echo $album->getId();
}
```
**Add user VKontakte to friend:**
```php
$friendsAdd = new FriendsAdd();
$result = $friendsAdd->setUserId(1)
    ->setText("Add me as a friend rather")
    ->doRequest();
if($result === true ){
    echo $friendsAdd->getResponse();
}
```
**Change the status of the user VKontakte:**
```php
$statusSet = new StatusSet();
$result = $statusSet
    ->setText("This is my new status")
    ->doRequest();
if($result===true){
    echo $statusSet->getResponse();
}
```
**Add a comment to the discussion VKontakte:**
```php
$boardComment = new BoardAddComment();
$result = $boardComment->setText("This is my new comment")
    ->setGroupId(1)
    ->setTopicId(1)
    ->doRequest();
if($result===true){
    echo $boardComment->getCommentId();
}
```
**Set the status of "online" in your account VKontakte:**
```php
$online = new AccountSetOnline();
$result = $online->doRequest();
if($result===true){
    echo $online->getResponse();
}
```
**Send message to VKontakte user:**
```php
$message = new MessagesSend();
$result = $message->setMessage("Hello people")
    ->setUserId(1)->doRequest();
if( $result===true ){
    echo $message->getMessageId();
}
```
**Create a new poll VKontakte:**
```php
$poll = new PollsCreate();
$result = $poll->setOwnerId(1)->setIsAnonymous(1)
    ->setQuestion("Would you like to provide financial assistance for a set of these classes?")
    ->addAnswer("Yes")
    ->addAnswer("Of Course")
    ->doRequest();
if( $result === true ){
    $pollInfo = $poll->getPollInfo();
    echo $pollInfo->getId() . "\n";
    echo $pollInfo->getVotes() . "\n";
}
```
**Console log example**
<pre>
<span style="color:green">info</span>(1).........[2016/11/27 17:48:46] -> Set parameter: user_ids as array, values: a:1:{i:0;i:1;}
<span style="color:yellow">debug</span>(1)........[2016/11/27 17:48:46] -> execApi: https://api.vk.com/method/users.get?v=5.60
<span style="color:yellow">debug</span>(2)........[2016/11/27 17:48:46] -> with headers: a:1:{s:12:"Content-type";s:19:"multipart/form-data";}
<span style="color:yellow">debug</span>(3)........[2016/11/27 17:48:46] -> with parameters: a:1:{s:8:"user_ids";s:1:"1";}
<span style="color:yellow">debug</span>(4)........[2016/11/27 17:48:46] -> execApi result: {"response":[{"id":1,"first_name":"Павел","last_name":"Дуров"}]}
</pre>

**Connecting your logger**
```php
\VkSdk\Includes\Request::setLogger(new \youre\Logger());
```

**Connecting anti captcha**
```php
$antiCaptcha = new \AntiCaptcha\RuCaptcha(); //integrated in project now
$antiCaptcha->setAccessToken($anti_captcha_access_token);
\VkSdk\Includes\Request::setAntiCaptcha($antiCaptcha);
```

Get Access Token: http://vk.com/dev/auth_sites
<br> Description of the API methods: http://vk.com/dev/methods

**if you find error - please send mail for me**