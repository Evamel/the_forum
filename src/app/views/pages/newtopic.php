<?php
// New topic and update topic, require database of the topic
echo 'New Topic Page';

foreach ($data['topics'] as $topic) {
    echo " Topic : " . $topic->topic_subject;
    echo "<br>";
    echo " Published : " . $topic->topic_date;
}
// Use if?? If the topic doesn't exist in DB create new one, else edit it?
