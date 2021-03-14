'use strict';

function guestList(name, state) {
    let guests = new Set();
    guests.add('Zakhar');
    guests.add('Nastia');
    guests.add('Yekaterina');
    guests.add('Mishka');
    guests.add('Samuil');
    guests.add('Yelisey');
    guests.add('Inga');
    guests.add('Nazariy');
    guests.add('Kir');
    guests.add('Dominika');

    if(state === 1) {
        let has = guests.has(name);
        if(has)
            alert('Yeah, you\'re on the list');
        else alert('Sorry, i don\'t see you on the list');
    }
    if(state === 2) {
        let has = guests.delete(name);
        if(has)
            alert(name + ' was successfully deleted!');
        else alert(name + ' is not on the list');
    }
    if(state === 3) {
        alert('I don\'t want to answer that')
    }
}

function menu(name) {
    let menu = new Map();
    menu.set('Ramen', 199);
    menu.set('Cacio e pepe', 300);
    menu.set('Southern fried chicken', 299);
    menu.set('Boeuf bourguignon', 399);
    menu.set('Barramundi', 100);

    if(name === 'all') {
        let all = '';
        for(const item of menu)
            all = all.concat(item + '$\n');
        alert(all);
    }
    else {
        let yes = menu.get(name);
        if(yes === undefined)
            alert('Bro what are you even saying');
        else
            alert(yes + '$');
    }
}

function bankVault(credits) {
    let bank = new WeakMap();

    const client1 = {
        id: 1234,
        name: 'Zakhar',
        location: 'Ukraine'
    }
    const client2 = {
        id: 2345,
        name: 'Nastia',
        location: 'Spain'
    }
    const client3 = {
        id: 3456,
        name: 'Yekaterina',
        location: 'US'
    }
    const client4 = {
        id: 4567,
        name: 'Mishka',
        location: 'Canada'
    }
    const client5 = {
        id: 5678,
        name: 'Samuil',
        location: 'Egypt'
    }

    bank.set(client1, 5876543210123456);
    bank.set(client2, 7464992212223871);
    bank.set(client3, 3093864630769983);
    bank.set(client4, 4747166166666934);
    bank.set(client5, 6021328126464675);

    if(bank.get(client1) === credits)
        alert(`Deposit box of ${credits}:\n\n` + `CLIENT ID: ${client1.id}\n` + `CLIENT NAME: ${client1.name}\n` + `CLIENT LOCATION: ${client1.location}`);
    else if(bank.get(client2) === credits)
        alert(`Deposit box of ${credits}:\n\n` + `CLIENT ID: ${client2.id}\n` + `CLIENT NAME: ${client2.name}\n` + `CLIENT LOCATION: ${client2.location}`);
    else if(bank.get(client3) === credits)
        alert(`Deposit box of ${credits}:\n\n` + `CLIENT ID: ${client3.id}\n` + `CLIENT NAME: ${client3.name}\n` + `CLIENT LOCATION: ${client3.location}`);
    else if(bank.get(client4) === credits)
        alert(`Deposit box of ${credits}:\n\n` + `CLIENT ID: ${client4.id}\n` + `CLIENT NAME: ${client4.name}\n` + `CLIENT LOCATION: ${client4.location}`);
    else if(bank.get(client5) === credits)
        alert(`Deposit box of ${credits}:\n\n` + `CLIENT ID: ${client5.id}\n` + `CLIENT NAME: ${client5.name}\n` + `CLIENT LOCATION: ${client5.location}`);
    else alert(`Wrong credentials. Access denied.`)
}

function coinCollection() {

    let coinCollection = new WeakSet();

    const coin1 = {
        value: 5,
        year: 2002
    }
    const coin2 = {
        value: 10,
        year: 2005
    }
    const coin3 = {
        value: 25,
        year: 2008
    }
    const coin4 = {
        value: 50,
        year: 2010
    }
    const coin5 = {
        value: 1,
        year: 2018
    }

    coinCollection.add(coin1, "5 копеек");
    coinCollection.add(coin2, "10 копеек");
    coinCollection.add(coin3, "25 копеек");
    coinCollection.add(coin4, "50 копеек");
    coinCollection.add(coin5, "1 гривна");

    alert(`coin1:\nvalue: ${coin1.value}\nyear: ${coin1.year}\n\n` + `coin2:\nvalue: ${coin2.value}\nyear: ${coin2.year}\n\n` + `coin3:\nvalue: ${coin3.value}\nyear: ${coin3.year}\n\n` +`coin4:\nvalue: ${coin4.value}\nyear: ${coin4.year}\n\n` +`coin5:\nvalue: ${coin5.value}\nyear: ${coin5.year}`);
}

//Testing guestList(Set) collection.
// let guest = "";
// while(!guest)
//     guest = prompt(`Please enter your name:`, ``);
// guestList(guest, 1);
// guest = prompt(`\nWho do you want to delete (leave empty if no one):`, ``);
// if(guest)
//     guestList(guest, 2);
// guest = prompt(`\nWhat else do you want to know?`, ``);
// if(guest)
//     guestList(guest, 3);

//Testing Menu(Map) collection.
// let dish = "";
// while(dish === "" || dish === null)
//     dish = prompt(`Type the name of dish or type 'all' to list all of the dishes`, `all`)
// menu(dish);

//Testing bankVault(WeakMap) collection.
// let client = "";
// while(!client)
//     client = prompt(`Please client credentials:`, `5876543210123456`);
// bankVault(+client);

//Testing coinCollection(WeakSet) collection.
// alert(`Press OK to see all the coins`);
// coinCollection();
