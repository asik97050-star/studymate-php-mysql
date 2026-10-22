
erDiagram
    USERS ||--o{ SUBJECTS : creates
    USERS ||--o{ TASKS : manages
    SUBJECTS ||--o{ TASKS : contains

    USERS {
        int id PK
        varchar name
        varchar email
        varchar password
    }

    SUBJECTS {
        int id PK
        int user_id FK
        varchar name
        text description
    }

    TASKS {
        int id PK
        int user_id FK
        int subject_id FK
        varchar title
        date due_date
        varchar status
    }
