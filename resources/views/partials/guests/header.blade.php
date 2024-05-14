<header>
    <div class="logo">
        <a href="">
            <span>ComicsBase</span>
        </a>
    </div>
    <nav>
        <ul>
            <a href="/">
                <li>Anni 20</li>
            </a>
            <a href="/anni10">
                <li>Anni 10</li>
            </a>
            <a href="/anni00">
                <li>Anni 00</li>
            </a>
            <a href="/anni1900">
                <li>19th Century</li>
            </a>
        </ul>
    </nav>
</header>


<style type="text/css">
    header {

        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: var(--bgheader-violet);
        

        & .logo {

            padding: 0 1rem;

            & span {
                font-size: 40px;
                font-weight: 600;
                color: var(--textheader-yellow);
            }

            & span:hover {
                color: var(--hover-textheader-yellow);
            }
        }

        & nav {

            & ul {
                list-style: none;
                display: flex;


                & a {
                    text-decoration: none;
                    margin: 0 2rem;
                }

                & li {
                    padding: 1rem;
                    font-weight: 500;
                    font-size: 20px;
                    color: var(--textheader-yellow);
                }

                & li:hover {

                    background-color: var(--hover-bgheader-violet);
                    color: var(--hover-textheader-yellow);

                }

            }
        }
    }
</style>