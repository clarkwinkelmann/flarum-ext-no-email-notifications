import app from 'flarum/forum/app';
import {extend} from 'flarum/common/extend';
import NotificationGrid from 'flarum/forum/components/NotificationGrid';

app.initializers.add('no-email-notifications', () => {
    extend(NotificationGrid.prototype, 'notificationMethods', function (items) {
        items.remove('email');
    });
});
