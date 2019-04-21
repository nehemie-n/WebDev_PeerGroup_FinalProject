let count = 1;
/**
 * For sending hte message of user
 * @param {*} event 
 */
function sendMessage(event) {
    // grab user's message
    let msg = document.msg_input.msg.value;
    if (msg) {
        appendMessage(msg);
        document.msg_input.msg.value = "";
    }
    if (count == 2) {
        appendMessage("Thanks for reaching out. We will contact you soon", true);
    }
    if (count == 4) {
        appendMessage("You are a good client, You are still talking to a BOT.", true);
    }
}

/**
 * Appends the message to the DOM
 * @param {*} msg 
 */
function appendMessage(msg, left = false) {
    count++;
    let msg_holders = document.getElementById("msg-holders");
    let msgELe = document.createElement('div');
    msgELe.classList.add('msg');
    if (left) {
        msgELe.classList.add('msg-left');
    } else {
        msgELe.classList.add('msg-right');
    }
    msgELe.innerText = msg;
    msg_holders.appendChild(msgELe);
}