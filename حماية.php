<?php
ob_start();
$API_KEY = '850403307:AAGOpPmsSvT7GkC0aIZ0H3STBGMtIfrOMOM';
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $ALI = http_build_query($datas);
        $url = "https://api.telegram.org/bot".1798062295:AAFukf-7dc8SqSVky1VQaX13gCUq-k5BwS8."/".$method."?$ALI";
        $XT1XT1 = file_get_contents($url);
        return json_decode($XT1XT1);
}
$update=json_decode(file_get_contents('php://input'));
$update2=json_decode(file_get_contents('php://input'),true);
$sudo = "1438306983";
$username="k4hbot";
$namechat=$update->message->chat->title;
$chattype=$update->message->chat->type;
$emoji=explode(",","đ,đ,đ,đ,đ,đ,đ,đ¤Ŗ,âēī¸,đ,đ,đ,đ,đ,đ,đ,đ,đ,đ,đ,đ,đ,đ,đ,đ¤,đ¤,đ¤,đ,đ¤Ą,đ¤ ,đ,đ,
đ,đ,đ,đ,đ,âšī¸,đŖ,đ,
đĢ,đŠ,đ¤,đ ,đĄ,đļ,đ,đ,đ¯,đĻ,đ§,đŽ,đ˛,đĩ,đŗ,đą,
đ¨,đ°,đĸ,đĨ,đ¤¤,đ­,đ,đĒ,đ´,đ,đ¤,đ¤Ĩ,đŦ,đ¤,đ¤ĸ,đ¤§,đˇ,đ¤,đ¤,đ,đŋ,đē,đ¸,đš,đģ,đŧ,đŊ,đ,đŋ,đž");
$english=explode(",","a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z");
if(isset($update->message->new_chat_member) || isset($update->message->new_chat_photo) || isset($update->message->new_chat_title) || isset($update->message->left_chat_member) || isset($update->message->pinned_message)){

$chat_id=$update->message->chat->id; $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
  if($settings["tg"]=="yes"){
    bot("deleteMessage",[
      "chat_id"=>$chat_id,
      "message_id"=>$update->message->message_id
    ]);
  }
}
if(isset($update->message->new_chat_member)){
   if($update->message->new_chat_member->username==$username and $chattype!="channel"){
     $chat_id=$update->message->chat->id;

   mkdir("$chat_id");
 $admins=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=$chat_id"),true);
     $admins=$admins['result'];
     foreach($admins as $key=>$value){
       $id=$admins[$key]['user']['id'];
       $list="$list\n$id";
       $creator=array_search("creator",$admins[$key]);
       if($creator!=false){
         file_put_contents("$chat_id/creator.txt","$id");
       }
     }
     file_put_contents("$chat_id/admins.txt","admins\n$list");
     file_put_contents("$chat_id/settings.json",json_encode(["link"=>"yes","hashtag"=>"no","username"=>"no","forward"=>"yes","bot"=>"yes","photo"=>"no","video"=>"no","document"=>"no","bold"=>"no","code"=>"no","italic"=>"no","sticker"=>"no","voice"=>"no","audio"=>"no","emoji"=>"no","english"=>"no","tg"=>"yes","kickadderbot"=>"no"]));
     file_put_contents("$chat_id/mutes.txt","mutes");
     if(file_exists("chats.json")){
       $groups=json_decode(file_get_contents("chats.json"),true);
       $groups["$chat_id"]=$namechat;
       $groups=json_encode($groups);
       file_put_contents("chats.json","$groups");
     }else{
       file_put_contents("chats.json",json_encode(["$chat_id"=>"$namechat"]));
     }
     var_dump(bot("sendMessage",[
       "chat_id"=>$chat_id,
       "text"=>"",
       "parse_mode"=>"markdown"
     ]));
   }elseif($update->message->new_chat_member->is_bot==true){
     $chat_id=$update->message->chat->id;
     $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
     $admins=file_get_contents("$chat_id/admins.txt");
     $id=$update->message->from->id;
     if($settings["kickadderbot"]=="yes" && $update->message->from->id!=$sudo && !strstr($admins,"$id")){
       bot("kickChatMember",[
         "chat_id"=>$chat_id,
         "user_id"=>$id
       ]);
     }
     if($settings['bot']=="yes"){
       var_dump(bot("kickChatMember",[
         "chat_id"=>$chat_id,
         "user_id"=>$update->message->new_chat_member->id
       ]));
     }
   }
}
if(isset($update->message->left_chat_member)){
$user=$update->message->left_chat_member->username;
$chat_id=$update->message->chat->id;
$chatname=$update->message->chat->title;
  if($user==$username){
    unlink("$chat_id/admins.txt");
    unlink("$chat_id/mutes.txt");
    unlink("$chat_id/creator.txt");
    unlink("$chat_id/settings.json");
    rmdir("$chat_id");
    $groups=json_decode(file_get_contents("chats.json"),true);
    unset($groups["$chat_id"]);
    $groups=json_encode($groups);
    file_put_contents("chats.json","$groups");
  }
}
if(isset($update->message->text)){
if($update->message->chat->type!="private"){
 $id=$update->message->from->id;
 $chat_id=$update->message->chat->id;
 $mutes=file_get_contents("$chat_id/mutes.txt");
 $text=$update->message->text; $adminlist=file_get_contents("$chat_id/admins.txt");
 $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
 if($id!=$sudo and strstr("$adminlist","$id")==false){
   foreach($emoji as $key=>$value){
     if(strstr($text,$emoji[$key])==true and $settings['emoji']=="yes"){
       var_dump(bot("deleteMessage",[
         "chat_id"=>$chat_id,
         "message_id"=>$update->message->message_id
       ]));
     }
   }
   foreach($english as $key=>$value){
     if(stristr($text,$english[$key])==true and $settings['english']=="yes"){
       var_dump(bot("deleteMessage",[
         "chat_id"=>$chat_id,
         "message_id"=>$update->message->message_id
       ]));
     }
   }
 }
 if(isset($update->message->entities)){
$adminlist=file_get_contents("$chat_id/admins.txt");
if($id!=$sudo and strstr("$adminlist","$id")==false){     
$array=json_decode(file_get_contents('php://input'),true);
     $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
     foreach($array['message']['entities'] as $key=>$value){
       $t=$array['message']['entities'][$key]['type'];
       if($t=="mention" and $settings['username']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="url" and $settings['link']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="hashtag" and $settings['hashtag']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="text_link" and $settings['link']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="bold" and $settings['bold']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="code" and $settings['code']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="italic" and $settings['italic']=="yes"){
        var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }
     }
   }}
   $j=file_get_contents("$chat_id/admins.txt");
   if(($update->message->text=="Ø§ŲØ§ØšØ¯Ø§Ø¯Ø§ØĒ" and strstr("$j","$id")==true) or ($update->message->text=="Ø§ŲØ§ØšØ¯Ø§Ø¯Ø§ØĒ" and $update->message->from->id==$sudo)){
     $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
     $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }
     var_dump(bot("sendMessage",[
       "chat_id"=>$chat_id,
       "text"=>"_>>> Ø§ØšØ¯Ø§Ø¯Ø§ØĒ Ø§ŲŲØŦŲŲØšØŠ <<<_",
       "parse_mode"=>"markdown",       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
   }elseif(($update->message->text=="/settings" and strstr("$j","$id")==true) or ($update->message->text=="/delphoto" and $update->message->from->id==$sudo)){
     bot("deleteChatPhoto",[
       "chat_id"=>$chat_id
     ]);
   }elseif($update->message->text=="Ø§ŲØēØ§ØĄ Ø§ŲØĒØĢØ¨ŲØĒ" and (strstr("$adminlist","$id")==true or $id==$sudo)){
    var_dump(bot("unpinChatMessage",[
      "chat_id"=>$chat_id
    ]));
  }elseif($update->message->text=="Ø§ŲØ§ŲØ§ŲØą" and (strstr("$adminlist","$id")==true or $id==$sudo)){
    var_dump(bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>"Ø§ŲØ§ŲØą Ø§ŲØŽØ§ØĩØŠ Ø¨Ø§ŲŲØŦŲŲØšØŠ
- Ø§ŲØ§ØšØ¯Ø§Ø¯Ø§ØĒ : ŲØšØąØļ Ø§ØšØ¯Ø§Ø¯Ø§ØĒ Ø§ŲŲŲŲ Ų Ø§ŲŲØĒØ­ 
- ØąŲØš Ø§Ø¯ŲŲ Ø¨Ø§ŲØąØ¯ 
- ØĒŲØ˛ŲŲ Ø§Ø¯ŲŲ Ø¨Ø§ŲØąØ¯
- Ø­Ø¸Øą Ø¨Ø§ŲØąØ¯ 
- Ø§ŲØēØ§ØĄ Ø§ŲØ­Ø¸Øą Ø¨Ø§ŲØąØ¯ 
- ŲØĒŲ Ø¨Ø§ŲØąØ¯ 
- Ø§ŲØēØ§ØĄ Ø§ŲŲØĒŲ Ø¨Ø§ŲØąØ¯ 
- Ø§ŲŲŲØĒŲŲŲŲ 
- ØĒØĢØ¨ŲØĒ Ø¨Ø§ŲØąØ¯ 
- Ø§ŲØēØ§ØĄ Ø§ŲØĒØĢØ¨ŲØĒ Ø¨Ø§ŲØąØ¯
- Ø§ŲØ¯Ų Ø¨Ø§ŲØąØ¯ 

-"
    ]));
  }elseif($update->message->text=="Ø§ŲŲŲØĒŲŲŲŲ" and (strstr("$adminlist","$id")==true or $id==$sudo)){
    if($mutes!="mutes"){
      $mutes=str_replace("mutes\n","","$mutes");
      $mutes=explode("\n","$mutes");
      $list=array();
      foreach($mutes as $key=>$value){
      $list[$key]=array(array("text"=>"$value","callback_data"=>"mute$value"));
      }
      var_dump(bot("sendMessage",[
        "chat_id"=>$chat_id,
        "text"=>"_>> ŲØ§ØĻŲØŠ Ø§ŲŲŲØĒŲŲŲŲ <<_",
        "parse_mode"=>"markdown",
        "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
      ]));
    }else{
      var_dump(bot("sendMessage",[
        "chat_id"=>$chat_id,
        "text"=>"Ø§ŲŲØ§ØĻŲØŠ ŲØ§ØąØēØŠ",
        "parse_mode"=>"markdown"
        ]));
    }
  }elseif($update->message->text=="Ø§ŲŲØŦŲŲØšØ§ØĒ" and $id==$sudo){
    $groups=json_decode(file_get_contents("chats.json"),true);
    $list=array();
    foreach($groups as $key=>$value){
      array_push($list,array(array("text"=>$value,"callback_data"=>$key."leavechat")));
    }
    var_dump(bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>"_>>>> Ø§ŲŲØŦŲŲØšØ§ØĒ <<<<_",
      "parse_mode"=>"markdown",
      "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
    ]));
  }
 }else{
   if($update->message->text=="/start"){
     var_dump(bot("sendMessage",[
       "chat_id"=>$update->message->chat->id,
       "text"=>" ŲØąØ­Ø¨Ø§ ØšØ˛ŲØ˛Ų 
Ø§ŲØ¨ŲØĒ ŲØĒØˇŲØą ŲŲ ŲŲØšØŠ ŲŲ Ø­ŲØĢ Ø§ŲØ­ŲØ§ŲØŠ 100%
 
ŲŲØˇ Ø§ØļŲ Ø§ŲØ¨ŲØĒ Ø§Ø¯ŲŲ ŲŲ Ø§ŲŲØŦŲŲØšØŠ Ų ØŖØąØŗŲ Ø§ŲØ§ŲØ§ŲØą",
       "parse_mode"=>"markdown",
       "reply_markup"=>json_encode(["inline_keyboard"=>[[["text"=>"Ø§ØļŲŲŲ ŲŲØŦŲŲØšØĒŲ","url"=>"http://telegram.me/$username?startgroup=new"]]]])
     ]));
   }
 }
}elseif(isset($update->message->caption)){
if($update->message->chat->type!="private"){
 $id=$update->message->from->id;
 $chat_id=$update->message->chat->id;
 $mutes=file_get_contents("$chat_id/mutes.txt");
 $caption=$update->message->caption; $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
 $adminlist=file_get_contents("$chat_id/admins.txt");
 if($id!=$sudo and strstr("$adminlist","$id")==false){
   foreach($emoji as $key=>$value){
     if(strstr("$caption",$emoji[$key])==true and $settings['emoji']=="yes"){
       var_dump(bot("deleteMessage",[
         "chat_id"=>$chat_id,
         "message_id"=>$update->message->message_id
       ]));
     }
   }
   foreach($english as $key=>$value){
     if(stristr("$caption",$english[$key])==true and $settings['english']=="yes"){
       var_dump(bot("deleteMessage",[
         "chat_id"=>$chat_id,
         "message_id"=>$update->message->message_id
       ]));
     }
   }
 }
 if(strstr("$mutes","$id")==true){
   var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
 }elseif(isset($update->message->caption_entities)){
if($id!=$sudo and strstr("$adminlist","$id")==false){
     $array=json_decode(file_get_contents('php://input'),true);
     foreach($array['message']['caption_entities'] as $key=>$value){
       $t=$array['message']['caption_entities'][$key]['type'];
       if($t=="mention" and $settings['username']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="url" and $settings['link']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="hashtag" and $settings['hashtag']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="text_link" and $settings['link']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="bold" and $settings['bold']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="code" and $settings['code']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }elseif($t=="italic" and $settings['italic']=="yes"){
        var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
       }
     }
   }}
 }
}
if(isset($update->message->forward_from) or isset($update->message->forward_from_chat)){
$chat_id=$update->message->chat->id;
$id=$update->message->from->id;
$adminlist=file_get_contents("$chat_id/admins.txt");
$settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
 if($settings['forward']=="yes" and $id!=$sudo and strstr("$adminlist","$id")==false){
   var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
 }
}
if(isset($update->message->reply_to_message)){
$text=$update->message->text;
$chat_id=$update->message->chat->id;
$from_id=$update->message->from->id;
$rl_fromid=$update->message->reply_to_message->from->id;
$mutes=file_get_contents("$chat_id/mutes.txt");
$adminlist=file_get_contents("$chat_id/admins.txt");
$creator=file_get_contents("$chat_id/creator.txt");
  if(($text=="ØąŲØš Ø§Ø¯ŲŲ" and strstr("$creator","$from_id")==true) or ($text=="ØąŲØš Ø§Ø¯ŲŲ" and $from_id==$sudo)){
    if(strstr("$adminlist","$rl_fromid")==true){
      var_dump(bot("sendMessage",[
        "chat_id"=>$chat_id,
        "text"=>"Ø§ŲØšØļŲ $rl_fromid Ø¨ŲŲØšŲ Ø§Ø¯ŲŲ .",
        "parse_mode"=>"markdown"
      ]));
    }else{
      file_put_contents("$chat_id/admins.txt","$adminlist\n$rl_fromid");
      var_dump(bot("sendMessage",[
        "chat_id"=>$chat_id,
        "text"=>"Ø§ŲØšØļŲ $rl_fromid ØĒŲ ØąŲØšØŠ Ø§Ø¯ŲŲ .",
        "parse_mode"=>"markdown"
      ]));
    }
  }if(($text=="ØĒŲØ˛ŲŲ Ø§Ø¯ŲŲ" and strstr("$creator","$from_id")==true) or ($text=="ØĒŲØ˛ŲŲ Ø§Ø¯ŲŲ" and $from_id==$sudo)){
    if(strstr("$adminlist","$rl_fromid")==true){
      $adminlist=str_replace("\n$rl_fromid","","$adminlist");
     file_put_contents("$chat_id/admins.txt","$adminlist");
      var_dump(bot("sendMessage",[
        "chat_id"=>$chat_id,
        "text"=>"Ø§ŲØšØļŲ $rl_fromid ØĒŲ ØĒŲØ˛ŲŲŲ ŲŲ Ø§ŲØ§Ø¯ŲŲŲŲ .",
        "parse_mode"=>"markdown"
      ]));
    }else{
     var_dump(bot("sendMessage",[
        "chat_id"=>$chat_id,
        "text"=>"Ø§ŲØšØļŲ $rl_fromid ŲŲØŗ ŲŲ ŲØ§ØĻŲØŠ Ø§ŲØ§Ø¯ŲŲŲŲ",
        "parse_mode"=>"markdown"
      ]));
    }
  }elseif(($text=="ØˇØąØ¯" and strstr("$adminlist","$from_id")==true) or ($text=="ØˇØąØ¯" and $from_id==$sudo)){
    var_dump(bot("kickChatMember",[
      "chat_id"=>$chat_id,
      "user_id"=>$rl_fromid
    ]));
  }elseif($text=="ØĒØĢØ¨ŲØĒ" and (strstr("$adminlist","$from_id")==true or $from_id==$sudo)){
    var_dump(bot("pinChatMessage",[
      "chat_id"=>$chat_id,
      "message_id"=>$update->message->reply_to_message->message_id
    ]));
  }elseif($text=="Ø§ŲØēØ§ØĄ Ø§ŲØ­Ø¸Øą" && strstr("$adminlist","$from_id")==true){
    bot("unbanChatMember",[
      "chat_id"=>$chat_id,
      "user_id"=>$rl_fromid
    ]);
    bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>"Ø§ŲØšØļŲ $rl_fromid ØĒŲ Ø§ŲØēØ§ØĄ Ø­Ø¸ØąØŠ .",
      "parse_mode"=>"markdown"
    ]);
  }elseif($text=="Ø§ŲØ¯Ų"){
    var_dump(bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>"Ø§ŲØ§ŲØ¯Ų : `$id`",
      "parse_mode"=>"markdown"
    ]));
  }elseif($text=="ŲØŗØ­" and (strstr("$adminlist","$from_id")==true or $from_id==$sudo)){
    var_dump(bot("deleteMessage",[
      "chat_id"=>$chat_id,
      "message_id"=>$update->message->reply_to_message->message_id
    ]));
    var_dump(bot("deleteMessage",[
      "chat_id"=>$chat_id,
      "message_id"=>$update->message->message_id
    ]));
  }elseif($text=="ØĒØēŲØą Ø§ŲØĩŲØąØŠ" and isset($update->message->reply_to_message->photo) and ($from_id==$sudo or strstr("$adminlist","$from_id")==true)){
   $file_id=$update2["message"]["reply_to_message"]["photo"][0]["file_id"];
   $file_path=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getfile?file_id=$file_id"));
   $file_path=$file_path->result->file_path;
   file_put_contents("$chat_id/photo.jpg",file_get_contents("https://api.telegram.org/file/bot".API_KEY."/$file_path"));
   bot("setChatPhoto",[
     "chat_id"=>$chat_id,
     "photo"=>new CurlFile("$chat_id/photo.jpg")
   ]);
   unlink("$chat_id/photo.jpg");
  }elseif($text=="ŲØĒŲ" and $rl_fromid!=$sudo and strstr("$adminlist","$rl_fromid")==false and strstr("$mutes","$rl_fromid")==false and ($from_id==$sudo or strstr("$adminlist","$from_id")==true)){
    file_put_contents("$chat_id/mutes.txt","$mutes\n$rl_fromid");
    bot("restrictChatMember",[
      "chat_id"=>$chat_id,
      "user_id"=>$rl_fromid,
      "can_send_messages"=>false
    ]);
    var_dump(bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>"Ø§ŲØšØļŲ $rl_fromid ØĒŲ ŲØĒŲØŠ",
      "parse_mode"=>"markdown"
    ]));
  }elseif($text=="ŲØĒŲ" and $rl_fromid!=$sudo and strstr("$adminlist","$rl_fromid")==false and strstr("$mutes","$rl_fromid")==true and ($from_id==$sudo or strstr("$adminlist","$from_id")==true)){
    var_dump(bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>" Ø§ŲØšØļŲ $rl_fromid ØĒŲ ŲØĒŲØŠ Ø¨Ø§ŲŲØšŲ .",
      "parse_mode"=>"markdown"
    ]));
  }elseif($text=="ŲØĒŲ" and $rl_fromid!=$sudo and (strstr("$adminlist","$rl_fromid")==true or $update->message->reply_to_message->from->username=="$username") and strstr("$mutes","$rl_fromid")==false and ($from_id==$sudo or strstr("$adminlist","$from_id")==true)){
    var_dump(bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>"Ø§ŲØšØļŲ $rl_fromid ŲŲ ŲØ§ØĻŲØŠ Ø§ŲØ§Ø¯ŲŲŲŲ ŲØ§ ŲŲŲŲŲŲ ŲØĒŲØŠ",
      "parse_mode"=>"markdown"
    ]));
  }elseif($text=="Ø§ŲØēØ§ØĄ Ø§ŲŲØĒŲ" and (strstr("$adminlist","$from_id")==true or $from_id==$sudo) and strstr("$mutes","$rl_fromid")==true){
    $mutes=str_replace("\n$rl_fromid","","$mutes");
    bot("restrictChatMember",[
      "chat_id"=>$chat_id,
      "user_id"=>$rl_fromid,
      "can_send_messages"=>true,
      "can_add_web_page_previews"=>true,
      "can_send_media_messages"=>true,
      "can_send_other_messages"=>true
    ]);
    file_put_contents("$chat_id/mutes.txt","$mutes");
    var_dump(bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>"Ø§ŲØšØļŲ $rl_fromid ØĒŲ Ø§ŲØēØ§ØĄ ŲØĒŲØŠ",
      "parse_mode"=>"markdown"
    ]));
  }elseif($text=="Ø§ŲØēØ§ØĄ Ø§ŲŲØĒŲ" and (strstr("$adminlist","$from_id")==true or $from_id==$sudo) and strstr("$mutes","$rl_fromid")==false){
    var_dump(bot("sendMessage",[
      "chat_id"=>$chat_id,
      "text"=>"Ø§ŲØšØļŲ $rl_fromid ŲŲØŗ ŲŲ ŲØ§ØĻŲØŠ Ø§ŲŲØĒŲ .",
      "parse_mode"=>"markdown"
    ]));
  }
    
}
if(isset($update->message->video) || isset($update->message->video_note)){
 if($update->message->chat->type!="private"){
 $id=$update->message->from->id;
 $chat_id=$update->message->chat->id;
 $mutes=file_get_contents("$chat_id/mutes.txt");
 $adminlist=file_get_contents("$chat_id/admins.txt");
 if(strstr("$id","$mutes")==true){
   var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
   }
   $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
   if($settings['video']=="yes" and $id!=$sudo and strstr("$adminlist","$id")==false){
     var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
   }
 }
}elseif(isset($update->message->photo)){
if($update->message->chat->type!="private"){
 $id=$update->message->from->id;
 $chat_id=$update->message->chat->id;
 $mutes=file_get_contents("$chat_id/mutes.txt");
 $adminlist=file_get_contents("$chat_id/admins.txt");
   $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
   if($settings['photo']=="yes" and $id!=$sudo  and strstr("$adminlist","$id")==false){
     var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
   }
 }
}elseif(isset($update->message->voice)){
if($update->message->chat->type!="private"){
 $id=$update->message->from->id;
 $chat_id=$update->message->chat->id;
 $mutes=file_get_contents("$chat_id/mutes.txt");
 $adminlist=file_get_contents("$chat_id/admins.txt");
   $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
   if($settings['voice']=="yes" and $id!=$sudo and strstr("$adminlist","$id")==false){
     var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
   }
 }
}elseif(isset($update->message->audio)){
if($update->message->chat->type!="private"){
 $id=$update->message->from->id;
 $chat_id=$update->message->chat->id;
 $mutes=file_get_contents("$chat_id/mutes.txt");
 $adminlist=file_get_contents("$chat_id/admins.txt");
   $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
   if($settings['audio']=="yes" and $id!=$sudo and strstr("$adminlist","$id")==false){
     var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
   }
 }
}elseif(isset($update->message->sticker)){
if($update->message->chat->type!="private"){
 $id=$update->message->from->id;
 $chat_id=$update->message->chat->id;
 $mutes=file_get_contents("$chat_id/mutes.txt");
 $adminlist=file_get_contents("$chat_id/admins.txt");
   $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
   if($settings['sticker']=="yes" and $id!=$sudo and strstr("$adminlist","$id")==false){
     var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
   }
 }
}elseif(isset($update->message->document)){
if($update->message->chat->type!="private"){
 $id=$update->message->from->id;
 $chat_id=$update->message->chat->id;
 $mutes=file_get_contents("$chat_id/mutes.txt");
 $adminlist=file_get_contents("$chat_id/admins.txt");
   $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
   if($settings['document']=="yes" and $id!=$sudo and strstr("$adminlist","$id")==false){
     var_dump(bot("deleteMessage",[
           "chat_id"=>$update->message->chat->id,
           "message_id"=>$update->message->message_id
         ]));
   }
 }
}
if(isset($update->callback_query)){
$data=$update->callback_query->data;
$cl_id=$update->callback_query->id;
$cl_msgid=$update->callback_query->message->message_id;
$chat_id=$update->callback_query->message->chat->id;
$cl_fromid=$update->callback_query->from->id;
$mutes=file_get_contents("$chat_id/mutes.txt");
$adminlist=file_get_contents("$chat_id/admins.txt");
if(strstr("$adminlist","$cl_fromid")==true or $cl_fromid==$sudo){
    if($data=="forward:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['forward']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="forward:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['forward']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="bot:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['bot']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="bot:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['bot']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="kickadderbot:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['kickadderbot']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="kickadderbot:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['kickadderbot']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="link:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['link']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="link:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['link']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="bold:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['bold']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="bold:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['bold']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="code:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['code']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="code:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['code']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="italic:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['italic']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="italic:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['italic']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="username:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['username']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="username:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['username']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="hashtag:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['hashtag']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="hashtag:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['hashtag']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="video:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['video']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="video:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['video']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="photo:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['photo']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="photo:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['photo']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="document:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['document']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="document:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['document']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="voice:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['voice']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="voice:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['voice']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="sticker:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['sticker']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="sticker:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['sticker']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="audio:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['audio']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="audio:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['audio']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="emoji:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['emoji']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="emoji:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['emoji']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="english:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['english']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="english:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['english']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="tg:yes"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['tg']="no";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif($data=="tg:no"){
      $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
      $settings['tg']="yes";
      $json=json_encode($settings);
      file_put_contents("$chat_id/settings.json","$json");
      $list=array();
     $number=-1;
     foreach($settings as $key=>$value){
       $number=$number+1; $list[$number]=array(array("text"=>"$key","callback_data"=>"$key"),array("text"=>"$value","callback_data"=>"$key:$value"));
     }   
     var_dump(bot("editMessageReplyMarkup",[
       "chat_id"=>$chat_id,
       "message_id"=>$cl_msgid,       "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
     ]));
    }elseif(strstr($data,"mute")==true){
      $data=str_replace("mute","",$data);
      bot("restrictChatMember",[
        "chat_id"=>$chat_id,
        "user_id"=>$data+0,
        "can_send_messages"=>true,
        "can_add_web_page_previews"=>true,
      "can_send_media_messages"=>true,
      "can_send_other_messages"=>true
      ]);
      $mutes=str_replace("\n$data","","$mutes");
      file_put_contents("$chat_id/mutes.txt","$mutes");
      $mutes=file_get_contents("$chat_id/mutes.txt");
      if($mutes!="mutes"){
        $mutes=str_replace("mutes\n","","$mutes");
        $mutes=explode("\n","$mutes");
        $list=array();
        foreach($mutes as $key=>$value){         
        $list[$key]=array(array("text"=>"$value","callback_data"=>"mute$value"));
        }
        var_dump(bot("editMessageReplyMarkup",[
        "chat_id"=>$chat_id,
        "message_id"=>$cl_msgid,
        "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
        ]));
      }else{
        var_dump(bot("editMessageText",[
          "chat_id"=>$chat_id,
          "message_id"=>$cl_msgid,
          "text"=>"_muteslist is empty_",
          "parse_mode"=>"markdown"
        ]));
      }
    }elseif(strstr($data,"leavechat")==true and $cl_fromid==$sudo){
      $data2=str_replace("leavechat","",$data);
      $num=$data2+0;
      unlink("$data2/admins.txt");
      unlink("$data2/mutes.txt");
      unlink("$data2/creator.txt");
      unlink("$data2/settings.json");
      rmdir("$data2");
      $groups=json_decode(file_get_contents("chats.json"),true);
      unset($groups[$data2]);
        $list=array();
        foreach($groups as $key=>$value){
          array_push($list,array(array("text"=>$value,"callback_data"=>$key."leavechat")));
        }
        $groups=json_encode($groups);
        file_put_contents("chats.json","$groups");
        var_dump(bot("editMessageReplyMarkup",[
          "chat_id"=>$chat_id,
          "message_id"=>$cl_msgid,
          "reply_markup"=>json_encode(array("inline_keyboard"=>$list))
        ]));
        var_dump(bot("leavechat",[
          "chat_id"=>$num
        ]));
      }
      
  }else{
    var_dump(bot("answerCallbackQuery",[
      "callback_query_id"=>$cl_id,
      "text"=>"you are not in adminlist",
      "show_alert"=>true
    ]));
  }
}
if(isset($update->edited_message)){
$chat_id=$update->edited_message->chat->id;
$msgid=$update->edited_message->message_id;
$id=$update->edited_message->from->id;
$text=$update->edited_message->text;
$caption=$update->edited_message->caption;
$settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
$adminlist=file_get_contents("$chat_id/admins.txt");
if(empty($text)==false and $id!=$sudo and strstr("$adminlist","$id")==false){
  foreach($emoji as $key=>$value){
    if(strstr($text,$emoji[$key])==true and $settings['emoji']=="yes"){
      var_dump(bot("deleteMessage",[
        "chat_id"=>$chat_id,
        "message_id"=>$msgid
      ]));
    }
  }
  foreach($english as $key=>$value){
    if(stristr($text,$english[$key])==true and $settings['english']=="yes"){
      var_dump(bot("deleteMessage",[
        "chat_id"=>$chat_id,
        "message_id"=>$msgid
      ]));
    }
  }
}
if(empty($caption)==false and $id!=$sudo and strstr("$adminlist","$id")==false){
  foreach($emoji as $key=>$value){
    if(strstr($caption,$emoji[$key])==true and $settings['emoji']=="yes"){
      var_dump(bot("deleteMessage",[
        "chat_id"=>$chat_id,
        "message_id"=>$msgid
      ]));
    }
  }
  foreach($english as $key=>$value){
    if(stristr($caption,$english[$key])==true and $settings['english']=="yes"){
      var_dump(bot("deleteMessage",[
        "chat_id"=>$chat_id,
        "message_id"=>$msgid
      ]));
    }
  }
}
 if(isset($update->edited_message->entities) and $update->edited_message->chat->type!="private"){
   $array=json_decode(file_get_contents('php://input'),true);
if($id!=$sudo and strstr("$adminlist","$id")==false){
     foreach($array['edited_message']['entities'] as $key=>$value){
       $t=$array['edited_message']['entities'][$key]['type'];
       if($t=="mention" and $settings['username']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="url" and $settings['link']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="hashtag" and $settings['hashtag']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="text_link" and $settings['link']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="bold" and $settings['bold']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="code" and $settings['code']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="italic" and $settings['italic']=="yes"){
        var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }
     }
 }}elseif(isset($update->edited_message->caption_entities) and $update->edited_message->chat->type!="private"){
   $array=json_decode(file_get_contents('php://input'),true);
 if($id!=$sudo and strstr("$adminlist","$id")==false){
     $settings=json_decode(file_get_contents("$chat_id/settings.json"),true);
     foreach($array['edited_message']['caption_entities'] as $key=>$value){
       $t=$array['edited_message']['caption_entities'][$key]['type'];
       if($t=="mention" and $settings['username']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="url" and $settings['link']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="hashtag" and $settings['hashtag']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="text_link" and $settings['link']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="bold" and  $settings['bold']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="code" and $settings['code']=="yes"){
         var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }elseif($t=="italic" and $settings['italic']=="yes"){
        var_dump(bot("deleteMessage",[
           "chat_id"=>$chat_id,
           "message_id"=>$msgid
         ]));
       }
     }
 }}
}

//Ø§ŲØ§ŲØą Ø§ØļØ§ŲŲØŠ//

$from_id    = $message->from->id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
if($message){
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$msgmemo = $msgs['msgs'][$chat_id]
[$from_id];
$user = $message->from->username; 
$sudo= 367759364;

if($text=="Ø§ŲØ¯Ų"){
    $result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
    $file_id=$result["result"]["photos"][0][0]["file_id"];
    $count=$result["result"]["total_count"];
    var_dump(bot("sendphoto",[
      "chat_id"=>$chat_id,
      "caption"=>"đ¤ÂĻ ŲØšØąŲŲ Âģ @$user
đĢÂĻ Ø§ŲØ¯ŲŲ  Âģ $from_id
đ¨ÂĻ ØąØŗØ§ØĻŲŲ Âģ $msgmemo ØąØŗØ§ŲØŠØŠ
â­ī¸ÂĻ ØĩŲØąŲ Ø§ŲØ´ØŽØĩŲŲ Âģ $count đ
â  ",
      "photo"=>"$file_id",
'reply_to_message_id'=>$message->message_id,
    ]));
}
if($update->message->text=="ØĒŲØšŲŲ" and $id==$sudo){
mkdir("$chat_id");
$id = $message->from->id;
  var_dump(bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>" âŽŲââââââââââââ­
 âĒ ØĒŲ ØĒŲØšŲŲ Ø§ŲŲØŦŲŲØšŲ ââĢ

â¯âââââââââââŲâ°",
  'reply_to_message_id'=>$message->message_id,
    ]));
 }

?>
