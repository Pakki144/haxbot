fetch("url", {https://discordapp.com/api/webhooks/611747713507393537/_s4hHci9eDyB1ylD1XkrxMr38oWjTJ7uAZQtZXdn0CrlP1pgPHthalGsz9Rkvl5dsEcv
    method: 'POST',
    body: JSON.stringify({
      "avatar_url": "https://images2.imgbox.com/1b/82/8QkaoGhn_o.png",
      "content": "**" + player.name + "** joined to room. - " + time,
      "username": "Akelaa"
    }),
    headers: {
      'Content-Type': 'application/json'
    }
  }).then(res => res);
}
