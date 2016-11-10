<ul>
<h5>Supported:</h5>
<li>users</li>
<li>groups</li>
<li>wall</li>
<li>photos</li>
<li>friends</li>
<li>status</li>
<li>board</li>
<li>account</li>
<li>messages</li>
<li>polls</li>
<li>ads</li>
</ul>

**1) Download [composer](https://getcomposer.org/download/) :**

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" <br>
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" <br>
php composer-setup.php <br>
php -r "unlink('composer-setup.php');" 

**2) Install SDK:**

php composer.phar require programmis/php-vk-api-sdk

**3) Get token vkontakte:**

http://oauth.vk.com/authorize?client_id=3682744&v=5.7&scope=friends,wall,offline&redirect_uri=http://oauth.vk.com/blank.html&display=page&response_type=token <br>
in the address bar: <br>
https://oauth.vk.com/blank.html#access_token=**345345345345345345345345345d73e7de6acf1475ca460d**&expires_in=0&user_id=1 


<ul>
<h5>Examples:</h5>
<li>Obtain detailed information about users VKontakte:<br>
<pre>
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
</pre>
</li>
<li>Join this group or to attend a meeting VKontakte:<br>
<pre>
$joinGroup = new GroupsJoin();
$result = $joinGroup->setGroupId(1)->doRequest();
if( $result === true ){
    echo $joinGroup->getResponse();
}
</pre>
</li>
<li>
Place a record on the wall VKontakte:<br>
<pre>
$wallPost = new WallPost();
$result = $wallPost->setOwnerId(1)
    ->setMessage("test")
    ->doRequest();
if( $result === true ){
    echo $wallPost->getPostId();    
}
</pre>
</li>
<li>
Create a new album VKontakte:<br>
<pre>
$album = new PhotosCreateAlbum();
$album->setTitle("My new album");
$result = $album->doRequest();
if( $result === true ){
    echo $album->getId();
}
</pre>
</li>
<li>
Add user VKontakte to friend:<br>
<pre>
$friendsAdd = new FriendsAdd();
$result = $friendsAdd->setUserId(1)
    ->setText("Add me as a friend rather")
    ->doRequest();
if($result === true ){
    echo $friendsAdd->getResponse();
}
</pre>
</li>
<li>
Change the status of the user VKontakte:<br>
<pre>
$statusSet = new StatusSet();
$result = $statusSet
    ->setText("This is my new status")
    ->doRequest();
if($result===true){
    echo $statusSet->getResponse();
}
</pre>
</li>
<li>
Add a comment to the discussion VKontakte:<br>
<pre>
$boardComment = new BoardAddComment();
$result = $boardComment->setText("This is my new comment")
    ->setGroupId(1)
    ->setTopicId(1)
    ->doRequest();
if($result===true){
    echo $boardComment->getCommentId();
}
</pre>
</li>
<li>
Set the status of "online" in your account VKontakte:<br>
<pre>
$online = new AccountSetOnline();
$result = $online->doRequest();
if($result===true){
    echo $online->getResponse();
}
</pre>
</li>
<li>
Send message to VKontakte user:<br>
<pre>
$message = new MessagesSend();
$result = $message->setMessage("Hello people")
    ->setUserId(1)->doRequest();
if( $result===true ){
    echo $message->getMessageId();
}
</pre>
</li>
<li>
Create a new poll VKontakte:<br>
<pre>
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
</pre>
</li>
</ul>
Get Access Token: http://vk.com/dev/auth_sites
<br> Description of the API methods: http://vk.com/dev/methods
