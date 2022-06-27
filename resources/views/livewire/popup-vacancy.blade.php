<div>
    <div class="popup__vacancy-container">
        <img src="{{ $vacancy?->photo }}" alt="">
        <h4 class="vacancy__name">{{ $vacancy['name_'.session()->get('locale')] ?? null }}</h4>
        <div class="vacancy__block">
            <p>Обязанности</p>
            <span>{{ $vacancy['duty_'.session()->get('locale')] ?? null }}</span>
        </div>
        <div class="vacancy__block">
            <p>Требования</p>
            <span>{{ $vacancy['requirements_'.session()->get('locale')] ?? null }}</span>
        </div>
        <div class="vacancy__block">
            <p>Условия</p>
            <span>{{ $vacancy['condition_'.session()->get('locale')] ?? null }}</span>
        </div>

        <form class="vacancy__form" action="/message">
            <p>Анкета соискателя</p>
            <input type="hidden" name="vacancy_id" value="{{ $vacancy['id'] ?? null }}">
            <input type="text" name="name" placeholder="ФИО">
            <input type="tel" name="phone" placeholder="Номер телефона">
            <label for="file">
                <input id="file" type="file" name="file">
                <span>Прикрепить файл</span>
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.905 11.335C4.85625 11.7512 2.5 14.3375 2.5 17.5C2.5 20.9512 5.29875 23.75 8.75 23.75H22.5C25.2613 23.75 27.5 21.5113 27.5 18.75C27.5 15.9887 25.2613 13.75 22.5 13.75C22.5 9.6075 19.1425 6.25 15 6.25C11.7037 6.25 8.91125 8.37875 7.905 11.335Z" stroke="#8C1429" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.293 15.8338L15.0017 13.125L17.7105 15.8338" stroke="#8C1429" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 19.375V13.125" stroke="#8C1429" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </label>
            <textarea placeholder="Сообщение" name="message" id="" ></textarea>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
