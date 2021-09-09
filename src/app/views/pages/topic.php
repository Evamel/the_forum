<?php
// List of topics
echo 'Topic page';

foreach ($data['topics'] as $topic) {
    echo " Topic : " . $topic->topic_subject;
    echo "<br>";
    echo " Published : " . $topic->topic_date;
    echo "Content : " . $topic->topic_content;
}
// Add in DB in the table topics a new column for topic content. Because message is a comment, but the content of the topic need to stay above all the others in an other container.
// All users (member[0] or admin[1]) can create a topic.
// The author can lock (no more messages/comments but can be read) the topic and edit it.
// Need messages/comments HOW TO ?
