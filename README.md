# The Hill - 05 - The forum

> PHP/MySQL Bulletin Board Project

| Challenge Parameters | Challenge Details           |
| :------------------- | :-------------------------- |
| Repository           | `The forum`                 |
| Challenge type       | `consolidation challenge`   |
| Duration             | `2 weeks`                   |
| Deadline             | `20/09/2021 08h59`          |
| Deployment method    | `GitHub pages` or `Netlify` |
| Group composition    | `3-4`                       |
| Project submision    | coming soon                 |

---

## About

In this project, you will create a _bulletin board_, also called _forum_, using `PHP` & `MySQL`.  
You will also use [SASS](https://sass-lang.com/install) & [Bootstrap](https://getbootstrap.com/) (make it **responsive**!).  
The tooling that you will use is `docker`.

You will also **have _to follow the given design_** located [here](./design), if there are pages/elements missing, try to make it yourself while following the design.

### Features

You will design a database to handle four types of data:

- users
- boards
- topics
- messages

#### Users

- Users must be _connected_ to interact ; you will need to implement the creation of users (_sign up_) and the connection of users (_sign in_). Users will use an _unique_ `email` and a `password` for authorization.

- Users will also have a _nickname_ (must be unique), an _avatar_ (use [Gravatar](//gravatar.com)) and a _signature_ (to show at the end of each users' messages).

- Users will be able to modify their information (except email) on a **profile page**.

- Once Gravatar has been set up, an User must be able to _upload an image_ to be used as his avatar (if an User doesn't have an avatar, you still use his gravatar).

#### Boards

- A Board is a logical group of Topics. There will be four boards in your database: **General**, **Development**, **Smalltalk** and **Events**.

- Each Board has a _name_ and a _description_.

- When showing the list of the Boards, you need to show the last Topics: the three one with the most recent Message.

#### Topics

- A Topic is a timeline of Messages.

- Every user can create a Topic in a Board.

- Each Topic has a _title_, a _creation date_, a _content_ (which is kinda the _first message_) and an _author_ (an User).

- Allow the _author_ of a Topic to _lock_ it - a locked Topic can't receive new messages

#### Messages

- A Message is a contribution from an User to a Topic.

- Every User can add a Message to a Topic.

- Each Message has a _content_, a _create date_, an _author_ (an User), and an _edition date_.

- The _content_ must be _rich_: it must interprets **markdown** and _BONUS_(shows **emojis**).

- A Message can be _edited_ by his author, and will show his _edition date_ in that case.

- A Message can be _deleted_ by his author, and will be shown as "deleted" in the Topic.

### Technical aspects

- You will work by teams of 3 (or 4).

#### Tooling

- To handle your _local environment_, you _should_ use **docker** and **docker-compose**. Please refer to the [docker-readme.md](./docker-readme.md) file to know how to install and use docker.

> 🖐 **docker** is quite a complex tool.

Within these environment, you have an instance of **phpMyAdmin**, a _database manager_, to help you interact with your database while working on your project.

#### Organization & workflow

Be sure to document everything, that _anyone_ on the team can explain and understand _every_ part of the project.

Communication is the key.

### Deployment & deadline

The project needs to be _published_ on [Heroku](www.heroku.com) (you have free credits to use on Heroku with your **GitHub Student Pack**).

At the deadline of **20/09/2021 at 08h59**, we need to receive an **email**, to `nick@becode.org` **and** `tanya@becode.org`, with the _URL of your repository_ and the _URL of your project_ on Heroku.
